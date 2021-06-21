<?php 

session_start();

if (isset($_SESSION['email'])) {
	header('Location: assets/MasterDuel/cards.php');
}
else{
	header('Location:login.php');
}

 ?>