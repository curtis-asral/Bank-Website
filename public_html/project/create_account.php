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
    
    make_deposit($account_number, $deposit, $notes);

    // redirect the user to my_accounts.php
    header("Location: my_accounts.php");
    exit();
}
?>