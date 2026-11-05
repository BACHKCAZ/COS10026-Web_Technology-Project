
<?php include 'header.inc'; ?>

    <h2>Login</h2>

<form action="process.php" method="post">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <br><br>

    <input type="hidden" name="token" value="ZB106395993">

    <input type="submit" value="Login">

</form>

<?php
if (isset($_GET["error"])) {
    echo "<p>Invalid username or password. Please try again.</p>";
}
?>

<?php include 'footer.inc'; ?>




