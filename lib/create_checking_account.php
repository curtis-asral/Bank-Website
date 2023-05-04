<?php

/**
 * Will fetch the account of the logged in user, or create a new one if it doesn't exist yet.
 * Exists here so it may be called on any desired page and not just login
 * Will populate/refresh $_SESSION["user"]["account"] regardless.
 * Make sure this is called after the session has been set
 */
function create_checking_account()
{
    if (is_logged_in()) {
        //let's define our data structure first
        //id is for internal references, account_number is user facing info, and balance will be a cached value of activity
        $account = ["id" => -1, "account_number" => false, "balance" => 0];
        //this should always be 0 or 1, but being safe
        $query = "SELECT id, account, balance from Accounts where user_id = :uid LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        
        try {
            $query = "INSERT INTO Accounts (account, user_id, balance) VALUES (:account, :uid, :balance)";
            $account_number = generate_account_number(); // call a function to generate a unique 12-digit account number
            $user_id = get_user_id();
            $balance = 0; // initial balance of the new account
            $stmt = $db->prepare($query);
            $stmt->execute([":account" => $account_number, ":uid" => $user_id, ":balance" => $balance]);
            $account["id"] = $db->lastInsertId();
            $account["account_number"] = $account_number;
            flash("Your checking account has been created successfully!", "success");
        } catch (PDOException $e) {
            flash("An error occurred while creating your account", "danger");
            error_log(var_export($e, true));
        }

        $_SESSION["user"]["account"] = $account; //storing the account info as a key under the user session
        //Note: if there's an error it'll initialize to the "empty" definition around line 161

        return $account["account_number"];

    } else {
        flash("You're not logged in", "danger");
    }

}