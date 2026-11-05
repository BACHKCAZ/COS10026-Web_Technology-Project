<?php
session_start();


if (!isset($_SESSION["user"])) {
    header("Location: login.php?error=1");
    exit();
}

include 'header.inc';
?>

<h2>WELCOME, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h2>

<p>You have successfully logged in.</p>
<p>Token: <?php echo htmlspecialchars($_SESSION["token"]); ?></p>

<?php
include 'footer.inc';
?>