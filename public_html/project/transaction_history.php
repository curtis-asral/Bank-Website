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
// prepare the select query to fetch transaction information for the account
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
                <?php foreach ($transactions as $transaction) : ?>
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
</body>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>