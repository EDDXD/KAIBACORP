<?php 
include('login.php');
setcookie (session_id(), "", time() - (10*365*24*60*60));
session_destroy();
session_write_close();

$_SESSION = array();

header('Location: login.php');
 ?>