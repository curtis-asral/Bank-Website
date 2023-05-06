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
    <title>Internal Transfer</title>
</head>
<body>
    <div class="form-group">
        <h1>Internal Transfer</h1>
    </div>
    <div class="form-group d-flex">
        <li class="nav-item dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle me-2" type="button" id="sourceDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Source Account
            </button>
            <ul class="dropdown-menu" aria-labelledby="sourceDropdown">
                <?php foreach ($accounts as $account) : ?>
                    <li class="dropdown-item" id="source-account"><?php echo $account['account'] . " $" . $account['balance']; ?></li>
                <?php endforeach; ?>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="destinationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Destination Account
            </button>
            <ul class="dropdown-menu" aria-labelledby="destinationDropdown">
                <?php foreach ($accounts as $account) : ?>
                    <li class="dropdown-item" id="destination-account"><?php echo $account['account'] . " $" . $account['balance']; ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    </div>
    <div class="form-group" id="source"></div>
    <div class="form-group" id="destination"></div>
    <form method="POST" action="internal_transfer.php">
        <div class="form-group">
            <label for="transfer">Transfer Amount:</label>
            <input type="number" class="form-control" id="transfer_amount" name="transfer_amount" min="1" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="mt-3 btn btn-primary" name="transfer">Transfer</button>
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
        document.cookie = "source_account=unset";
        document.cookie = "destination_account=unset";
        const sourceAccounts = document.querySelectorAll('#source-account');
        sourceAccounts.forEach(item => {
            item.addEventListener('click', () => {
                const account = item.textContent.split(' ')[0];
                const balance = item.textContent.split(' ')[1];
                document.getElementById('source').textContent = `Source account: ${account}\tBalance: ${balance}`;
                document.cookie = "source_account=" + account;
            });
        });
        const destinationAccounts = document.querySelectorAll('#destination-account');
        destinationAccounts.forEach(item => {
            item.addEventListener('click', () => {
                const account = item.textContent.split(' ')[0];
                const balance = item.textContent.split(' ')[1];
                document.getElementById('destination').textContent = `Destination account: ${account}\tBalance: ${balance}`;
                document.cookie = "destination_account=" + account;
            });
        });
    </script>
</body>

<?php
if (isset($_POST['transfer'])) {
    $flag = FALSE;
    if ($_COOKIE['source_account'] == 'unset') {
        flash("Please select a source account", "warning");
        $flag = TRUE;
    } if ($_COOKIE['destination_account'] == 'unset') {
        flash("Please select a destination account", "warning");
        $flag = TRUE;
    } if (!$flag) {
        $source_account_number = $_COOKIE['source_account'];
        $destination_account_number = $_COOKIE['destination_account'];
        if ($source_account_number == $destination_account_number) {
            flash("Source and destination accounts must be different", "warning");
        } else {
            $transfer = $_POST['transfer_amount'];
            $notes = $_POST['notes'];
            make_transfer($source_account_number, $destination_account_number, $transfer, $notes);
        }
    }
}
?>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>