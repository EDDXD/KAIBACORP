<?php 

session_start();
if (isset($_SESSION['email'])) {
    require 'assets/views/contenido.view.php';
}
else{
    header('Location: login.php');
}

 ?>