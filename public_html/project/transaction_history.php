<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true)
?>

<?php
$db = getDB();
$account_number = $_GET['account'];

// prepare the select query to fetch accounts information for the user
$query = "SELECT id, account, created, balance FROM Accounts WHERE account = :account_number";
$stmt = $db->prepare($query);
$stmt->bindValue(':account_number', $account_number, PDO::PARAM_STR);

// execute the query and fetch the results as an array
$stmt->execute();
$account = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <title>Account Number <?php echo $account['account']; ?></title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Account Number <?php echo $account['account']; ?></h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Account Number</th>
                    <th>Account Type</th>
                    <th>Account Created</th>
                    <th>Account Balance</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><?php echo $account['account']; ?></td>
                        <td>Checking</td>
                        <td><?php echo $account['created']; ?></td>
                        <td><?php echo $account['balance']; ?></td>
                    </tr>
            </tbody>
        </table>
    </div>
</body>

<?php
// setting fromDate to the beginning of time
$fromDate = "1000-01-01 00:00:00";
// if from date is selected
if (isset($_GET['from'])) {
    $fromDate = $_GET['from'];
}
// setting toDate to the end of time
$toDate = "9999-12-31 23:59:59";
// if to date is selected
if (isset($_GET['to'])) {
    $toDate = $_GET['to'];
}
// setting type to all
$type = $_GET['type'];

// prepare the select query to fetch filtered transaction information for the account
if ($type == 'all') {
    $query = "SELECT src, dest, diff, reason, details, created FROM Transactions WHERE src = :account_id AND created BETWEEN :from_date AND :to_date";
} else {
    $query = "SELECT src, dest, diff, reason, details, created FROM Transactions WHERE src = :account_id AND reason = :type AND created BETWEEN :from_date AND :to_date";
}


$stmt = $db->prepare($query);
$stmt->bindValue(':account_id', $account['id'], PDO::PARAM_INT);
$stmt->bindValue(':from_date', $fromDate, PDO::PARAM_STR);
$stmt->bindValue(':to_date', $toDate, PDO::PARAM_STR);
if ($type != 'all') {
    $stmt->bindValue(':type', $type, PDO::PARAM_STR);
}
// execute the query and fetch the results as an array
$stmt->execute();
$filtered_transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);

// prepare the select query to fetch non-filtered transaction information for the account
$query = "SELECT src, dest, diff, reason, details, created FROM Transactions WHERE src = :account_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':account_id', $account['id'], PDO::PARAM_INT);
// execute the query and fetch the results as an array
$stmt->execute();
$transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<head>
    <title>Transaction History</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Transaction History</h1>
        <div class="form-group d-flex">
            <li class="nav-item dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle me-2" type="button" id="fromDateDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                        if ($fromDate == "1000-01-01 00:00:00") {
                            echo "From Date";
                        } else{
                            echo "From: " . $fromDate;
                        }
                    ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="fromDateDropdown">
                    <?php foreach ($transactions as $transaction) : ?>
                        <li class="dropdown-item" id="from-date">
                            <a href="transaction_history.php?account=<?php echo $account_number ?>&from=<?php echo $transaction['created']; ?>&to=<?php echo $toDate; ?>&type=<?php echo $type; ?>"
                            style="text-decoration:none; color:#333;">
                                <?php echo $transaction['created']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle me-2" type="button" id="toDateDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                        if ($toDate == "9999-12-31 23:59:59") {
                            echo "To Date";
                        } else{
                            echo "To: " . $toDate;
                        }
                    ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="toDateDropdown">
                    <?php foreach ($transactions as $transaction) : ?>
                        <li class="dropdown-item" id="to-date">
                            <a href="transaction_history.php?account=<?php echo $account_number ?>&from=<?php echo $fromDate; ?>&to=<?php echo $transaction['created']; ?>&type=<?php echo $type; ?>"
                            style="text-decoration:none; color:#333;">
                                <?php echo $transaction['created']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="transactionTypeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                        if ($type != 'all'){
                            echo "Transaction Type: " . $type . "s";
                        } else {
                            echo "Transaction Type: All";
                        }
                    ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="transactionTypeDropdown">
                    <li class="dropdown-item" id="transaction-type">
                        <a href="transaction_history.php?account=<?php echo $account_number ?>&from=<?php echo $fromDate; ?>&to=<?php echo $transaction['created']; ?>&type=<?php echo "all"; ?>"
                        style="text-decoration:none; color:#333;">
                            All
                        </a>
                    </li>
                    <li class="dropdown-item" id="transaction-type">
                        <a href="transaction_history.php?account=<?php echo $account_number ?>&from=<?php echo $fromDate; ?>&to=<?php echo $transaction['created']; ?>&type=<?php echo "Deposit"; ?>"
                        style="text-decoration:none; color:#333;">
                            Deposits
                        </a>
                    </li>
                    <li class="dropdown-item" id="transaction-type">
                        <a href="transaction_history.php?account=<?php echo $account_number ?>&from=<?php echo $fromDate; ?>&to=<?php echo $transaction['created']; ?>&type=<?php echo "Withdraw"; ?>"
                        style="text-decoration:none; color:#333;">
                            Withdraws
                        </a>
                    </li>
                    <li class="dropdown-item" id="transaction-type">
                        <a href="transaction_history.php?account=<?php echo $account_number ?>&from=<?php echo $fromDate; ?>&to=<?php echo $transaction['created']; ?>&type=<?php echo "Transfer"; ?>"
                        style="text-decoration:none; color:#333;">
                            Transfers
                        </a>
                    </li>
                </ul>
            </li>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Transaction Type</th>
                    <th>Change in Balance</th>
                    <th>Date</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($filtered_transactions as $transaction) : ?>
                    <tr>
                        <td>
                        <?php
                                // prepare the select query to fetch transaction information for the account
                                $query = "SELECT account FROM Accounts WHERE id = :src";
                                $stmt = $db->prepare($query);
                                $stmt->bindValue(':src', $transaction['src'], PDO::PARAM_INT);

                                // execute the query and fetch the results as an array
                                $stmt->execute();
                                $src_acc = $stmt->fetch(PDO::FETCH_ASSOC);
                                echo $src_acc['account'];
                            ?>
                        </td>
                        <td>
                            <?php
                                // prepare the select query to fetch transaction information for the account
                                $query = "SELECT account FROM Accounts WHERE id = :account_id";
                                $stmt = $db->prepare($query);
                                $stmt->bindValue(':account_id', $transaction['dest'], PDO::PARAM_INT);

                                // execute the query and fetch the results as an array
                                $stmt->execute();
                                $dest_acc = $stmt->fetch(PDO::FETCH_ASSOC);
                                echo $dest_acc['account'];
                            ?>
                        </td>
                        <td><?php echo $transaction['reason']; ?></td>
                        <td><?php echo $transaction['diff']; ?></td>
                        <td><?php echo $transaction['created']; ?></td>
                        <td><?php echo $transaction['details']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <style>
        .form-group {
            margin: 0 auto;
        }
        li {
            list-style-type: none;
        }
        .dropdown-toggle {
            list-style: none;
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</body>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>