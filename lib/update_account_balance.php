<?php

function update_account_balance($account_id, $deposit_amount) {
    $db = getDB();
    $query = "UPDATE Accounts SET balance = balance + :deposit_amount WHERE id = :account_id";
    $stmt = $db->prepare($query);
    $stmt->execute([
        ":deposit_amount" => $deposit_amount,
        ":account_id" => $account_id
    ]);
}

?>
