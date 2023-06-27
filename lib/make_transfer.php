<?php
function make_transfer($source_account_number, $destination_account_number, $transfer, $notes = "", $type = "Transfer") {

    $db = getDB();

    // retrieve the source account id number and balance
    $query = "SELECT id, balance FROM Accounts WHERE account = :account_number";
    $stmt = $db->prepare($query);
    $stmt->execute([":account_number" => $source_account_number]);
    $source_account = $stmt->fetch(PDO::FETCH_ASSOC);
    $source_account_id = $source_account['id'];
    $source_balance = $source_account['balance'];

    // make sure the user can’t transfer more money than the source account has
    if ($source_balance-$transfer < 0) {
        flash("Insignificant funds in source account", "warning");
        return;
    }

    // retrieve the destination account id number and balance
    $query = "SELECT id, balance FROM Accounts WHERE account = :account_number";
    $stmt = $db->prepare($query);
    $stmt->execute([":account_number" => $destination_account_number]);
    $destination_account = $stmt->fetch(PDO::FETCH_ASSOC);
    $destination_account_id = $destination_account['id'];
    $destination_balance = $destination_account['balance'];

    // create a new transaction for the source account
    $query = "INSERT INTO Transactions (src, dest, diff, reason, details) VALUES (:src, :dest, :diff, :reason, :details)";
    $stmt = $db->prepare($query);
    $stmt->execute([
        ":src" => $source_account_id,
        ":dest" => $destination_account_id,
        ":diff" => -1*$transfer,
        ":reason" => $type,
        ":details" => $notes
    ]);

    // create a new transaction for the destination account
    $query = "INSERT INTO Transactions (src, dest, diff, reason, details) VALUES (:src, :dest, :diff, :reason, :details)";
    $stmt = $db->prepare($query);
    $stmt->execute([
        ":src" => $destination_account_id,
        ":dest" => $source_account_id,
        ":diff" => $transfer,
        ":reason" => $type,
        ":details" => $notes
    ]);

    // update source and destination account balance
    update_account_balance($source_account_id, -1*$transfer);
    update_account_balance($destination_account_id, $transfer);
    flash("Transfer successful!", "success");
}
?>