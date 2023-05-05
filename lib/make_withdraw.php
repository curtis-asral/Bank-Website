<?php
function make_withdraw($account_number, $withdraw, $notes = "") {

    // retrieve the account id number and balance
    $db = getDB();
    $query = "SELECT id, balance FROM Accounts WHERE account = :account_number";
    $stmt = $db->prepare($query);
    $stmt->execute([":account_number" => $account_number]);
    $account = $stmt->fetch(PDO::FETCH_ASSOC);
    $account_id = $account['id'];
    $balance = $account['balance'];

    // make sure the user can’t withdraw more money than the account has
    if ($balance-$withdraw < 0) {
        flash("Insignificant funds", "warning");
        return;
    }

    // create a new transaction for the user
    $query = "INSERT INTO Transactions (src, dest, diff, reason, details) VALUES (:src, :dest, :diff, :reason, :details)";
    $stmt = $db->prepare($query);
    $stmt->execute([
        ":src" => $account_id,
        ":dest" => -1,
        ":diff" => -1*$withdraw,
        ":reason" => "Withdraw",
        ":details" => $notes
    ]);

    // create a new transaction for the world account
    $query = "INSERT INTO Transactions (src, dest, diff, reason, details) VALUES (:src, :dest, :diff, :reason, :details)";
    $stmt = $db->prepare($query);
    $stmt->execute([
        ":src" => -1,
        ":dest" => $account_id,
        ":diff" => $withdraw,
        ":reason" => "Withdraw",
        ":details" => $notes
    ]);

    // update world and user account balance
    update_account_balance(-1, $withdraw);
    update_account_balance($account_id, -1*$withdraw);
    flash("Withdraw successful!", "success");
}
?>