<?php 
session_start();
if (isset($_SESSION['email'])) {
    header('Location: index.php');
}
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING);
   $password = $_POST['password'];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=nonxxorg_YUGICORP', 'nonxxorg_godxd','Walpurg1z$$');
} catch (PDOException $e) {
    echo "Error:" . $e->getMessage();;
}

$statement = $conexion->prepare('SELECT * FROM duelista WHERE Email = :email AND Password = :password');

$statement->execute(array(':email'=> $email, ':password'=>$password));

$resultado=$statement->fetch();
if ($resultado !== false) {
    $_SESSION['email'] = $email;
    header('Location: assets/MasterDuel/cards.php');
    //aqui verifica y si son correctos los datos lo manda pa allá xd
}
else{
    $mensaje .= 'Correo o contraseña incorrectos.';
    echo "<script>alert('".$mensaje."');</script>";
}
    
}


require('assets/views/login.view.php');

 ?>