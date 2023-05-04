<?php
function generate_account_number() {
    $db = getDB();
    $account_number = generate_random_account_number(); // generate a random 12-digit account number
    $stmt = $db->prepare("SELECT COUNT(*) FROM Accounts WHERE account = :account");
    $stmt->execute([":account" => $account_number]);
    $count = $stmt->fetchColumn();
    while ($count > 0) {
        // account number already exists, generate a new one and check again
        $account_number = generate_random_account_number();
        $stmt->execute([":account" => $account_number]);
        $count = $stmt->fetchColumn();
    }
    return $account_number;
}

function generate_random_account_number() {
    $digits = "0123456789";
    $account_number = "";
    for ($i = 0; $i < 12; $i++) {
        $index = rand(0, strlen($digits) - 1);
        $account_number .= $digits[$index];
    }
    return $account_number;
}

?>