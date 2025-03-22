<?php
session_start();
require_once 'config.php';
include_once 'header.php';

//when form submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
  if ($_POST['username'] === USERNAME && $_POST['password'] === PASSWORD) {
    //write login to server storage
    $_SESSION['username'] = $_POST['username'];
    //redirect to main
    header('Location: ' . PATH);
  } else {
    echo "<script>alert('Wrong username or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}
?>

<h1>Login</h1>
<form method="post">
  Username:<br><input type="text" name="username"><br>
  Password:<br><input type="text" name="password"><br>
  <input type="submit" value="Login">
</form>

<?php
include_once 'footer.php';
?>