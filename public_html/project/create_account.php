<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true)
?>

<head>
<title>Create an Account</title>
</head>
<body>
<div class="form-group">
<h1>Create an Account</h1>
</div>
<form method="POST" action="create_account.php">
    <div class="form-group">
    <label for="deposit">Deposit Amount:</label>
    <input type="number" class="form-control" id="deposit" name="deposit" min="5" required>
    </div>
    <div class="form-group">
    <label for="notes">Notes:</label>
    <textarea class="form-control" id="notes" name="notes"></textarea>
    </div>
    <div class="form-group">
    <button type="submit" class="mt-3 btn btn-primary" name="create_account">Create Checking Account</button>
    </div>
</form>

<style>
    .form-group {
    width: 50%;
    margin: 0 auto;
    }
</style>
</body>



<?php
if (isset($_POST['create_account'])) {
    $account_number = create_checking_account();
    $deposit = $_POST['deposit'];
    $notes = $_POST['notes'];
    
    // retrieve the account id number
    $db = getDB();
    $query = "SELECT id FROM Accounts WHERE account = :account_number";
    $stmt = $db->prepare($query);
    $stmt->execute([":account_number" => $account_number]);
    // fetch the account id from the result set
    $account_id = $stmt->fetchColumn();

    // create a new transaction for the world account
    $query = "INSERT INTO Transactions (src, dest, diff, reason, details) VALUES (:src, :dest, :diff, :reason, :details)";
    $stmt = $db->prepare($query);
    $stmt->execute([
        ":src" => -1,
        ":dest" => $account_id,
        ":diff" => -1*$deposit,
        ":reason" => "Deposit",
        ":details" => $notes
    ]);

    // create a new transaction for the user
    $query = "INSERT INTO Transactions (src, dest, diff, reason, details) VALUES (:src, :dest, :diff, :reason, :details)";
    $stmt = $db->prepare($query);
    $stmt->execute([
        ":src" => $account_id,
        ":dest" => -1,
        ":diff" => $deposit,
        ":reason" => "Deposit",
        ":details" => $notes
    ]);

    // update world and user account balance
    update_account_balance(-1, -1*$deposit);
    update_account_balance($account_id, $deposit);

    // redirect the user to my_accounts.php
    header("Location: my_accounts.php");
    exit();
}
?>