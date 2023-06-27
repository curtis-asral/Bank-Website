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
    <title>Withdraw</title>
</head>
<body>
    <div class="form-group">
        <h1>Withdraw</h1>
    </div>
    <div class="form-group">
        <li class="nav-item dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="accountsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Accounts
            </button>
            <ul class="dropdown-menu" aria-labelledby="accountsDropdown">
                <?php foreach ($accounts as $account) : ?>
                    <li class="dropdown-item" id="account-<?php echo $account['account']; ?>"><?php echo $account['account'] . " $" . $account['balance']; ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    </div>
    <div class="form-group" id="selector"></div>
    <form method="POST" action="withdraw.php">
        <div class="form-group">
            <label for="withdraw">Withdraw Amount:</label>
            <input type="number" class="form-control" id="withdraw_amount" name="withdraw_amount" min="1" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="mt-3 btn btn-primary" name="withdraw">Withdraw</button>
        </div>
    </form>

    <style>
        .form-group {
            width: 50%;
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
    <script>
        document.cookie = "selected_account=unset";
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(item => {
            item.addEventListener('click', () => {
                const account = item.textContent.split(' ')[0];
                const balance = item.textContent.split(' ')[1];
                document.getElementById('selector').textContent = `Selected account: ${account}\tBalance: ${balance}`;
                document.cookie = "selected_account=" + account;
            });
        });
    </script>
</body>

<?php
if (isset($_POST['withdraw'])) {
    if ($_COOKIE['selected_account'] != 'unset') {
        $account_number = $_COOKIE['selected_account'];
        $withdraw = $_POST['withdraw_amount'];
        $notes = $_POST['notes'];
        make_withdraw($account_number, $withdraw, $notes);
    } else {
        flash("Please select an account", "warning");
    }
}
?>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>