<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true)
?>

<?php
$db = getDB();

// prepare the select query to fetch accounts information for the user
$user_id = get_user_id();
$query = "SELECT account, modified, balance FROM Accounts WHERE user_id = :user_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);

// execute the query and fetch the results as an array
$stmt->execute();
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<head>
    <title>My Accounts</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">My Accounts</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Account Number</th>
                    <th>Account Type</th>
                    <th>Last Modified</th>
                    <th>Account Balance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accounts as $account) : ?>
                    <tr>
                        <td><?php echo $account['account']; ?></td>
                        <td>Checking</td>
                        <td><?php echo $account['modified']; ?></td>
                        <td><?php echo $account['balance']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>