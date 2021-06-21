<?php 

session_start();
if (isset($_SESSION['email'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $username = $_POST['username'];

    // probando si se mandaba la info xd echo "$email . $password . $password2";
    $mensaje = '';

    if (empty($email) or empty($password) or empty($password2)) {
        $mensaje="Todos los campos son obligatorios";
        echo "<script>alert('".$mensaje."');</script>";
    }
    else{
        try {

            include('cn.php');

            $conexion = new PDO('mysql:host=localhost;dbname=nonxxorg_YUGICORP', 'nonxxorg_godxd','Walpurg1z$$');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT Email FROM duelista WHERE Email = :email');
        $statement->execute(array(':email' => $email));
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $mensaje .= 'Este correo ya se encuentra registrado.';
            echo "<script>alert('".$mensaje."');</script>";
        }
        if ($password != $password2) {
            $mensaje.= 'Las contraseñas no coinciden';
            echo "<script>alert('".$mensaje."');</script>";
        }
    }

    if ($mensaje == '') {
        $statement = $conexion->prepare('INSERT INTO `duelista`(`Username`, `Email`, `Password`) VALUES (:username, :email,:password)');

        $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $password));

        header('Location: login.php');
    }
}


require('assets/views/registrate.view.php');
 ?>