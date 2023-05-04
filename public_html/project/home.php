<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Home</h1>
    <div class="lead text-center mb-3">
        Welcome to Curtis Bank! <br>
    </div>

    <?php

    if (is_logged_in(true)) {
    //echo "Welcome home, " . get_username();
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
    ?>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>