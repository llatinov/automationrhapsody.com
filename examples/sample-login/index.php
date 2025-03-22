<?php
session_start();
require_once 'config.php';
include_once 'header.php';

// if sid exists and login for sid exists
if (session_id() == '' || !isset($_SESSION['username'])) {
?>
  <h1>Hello, you are currently not logged in</h1>
  <h3>You can login here: <a href="<?php echo PATH;?>/login.php">Login</a></h3>
<?php
} else {
  sleep(1);
?>
  <h1>Hello, you are currently logged in as: <i><?php echo $_SESSION['username'];?></i></h1>
  <h2>Now you have access to more advanced features of this application</h2>
  <h3>You can logout here: <a href="<?php echo PATH;?>/logout.php">Logout</a></h3>
<?php
}

include_once 'footer.php';
?>