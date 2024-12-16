<?php
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_POST['password'])) {
        if($_POST['password'] == 12345 && $_POST['username'] == "tureB") {
            $_SESSION['inLoggad'] = true;
            $_SESSION['username'] = $_POST['username'];
        }
    }
?>
<?php 
    if(isset($_SESSION['inLoggad'])) {
?>

<h1>Inloggad!</h1>
<a href="pages/logOut.php">Logga ut</a>

<?php 
    } else {
?>
<form method="post">
    <h2>Login</h2>
    Username: <input type="text" name="username" size="20">
    <br>
    Password: <input type="password" name="password" size="20">
    <br>
    <input type="submit" value="Submit" name="login">
</form>
<?php } ?>