<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true)
?>
<div class="container-fluid">
    <h1>Dashboard</h1>
    <ul class="list-unstyled">
        <li><a href="<?php echo get_url('create_account.php'); ?>">Create Account</li>
        <li><a href="<?php echo get_url('my_accounts.php'); ?>">My Accounts</li>
        <li><a href="<?php echo get_url('deposit.php'); ?>">Deposit</li>
        <li><a href="<?php echo get_url('withdraw.php'); ?>">Withdraw</li>
        <li><a href="<?php echo get_url('internal_transfer.php'); ?>">Internal Transfer</li>
        <li><a href="<?php echo get_url('external_transfer.php'); ?>">External Transfer</li>
        <li><a href="<?php echo get_url('profile.php'); ?>">Profile</li>
    </ul>

</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>