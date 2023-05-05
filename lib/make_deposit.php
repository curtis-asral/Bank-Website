<?php
function make_deposit($account_number, $deposit, $notes = "") {
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
    flash("Deposit successful!", "success");
}
?>