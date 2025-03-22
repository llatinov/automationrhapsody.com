<?php
session_start();
require_once 'config.php';

//send browser command remove sid from cookie
setcookie(session_name(), "", time() - 3600);

//remove sid-login from server storage
session_destroy();

session_write_close();

header('Location: ' . PATH);
?>