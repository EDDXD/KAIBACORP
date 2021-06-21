<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Favicons -->
  <link rel="shortcut icon" href="ass/img/chun_lo_astro_logo_eQ3_icon.ico" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ass/css/main.min.css">
  <link rel="stylesheet" href="ass/css/style.css">
  <link rel="stylesheet" href="ass/css/color.css">
  <link rel="stylesheet" href="ass/css/responsive.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	<title>KAIBACORP REGISTRO</title>
</head>
<body>
	 <body>
  <div class="theme-layout">
    <div class="container-fluid-pdng0">
      <div class="row merged">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
          <div class="login-reg-bg">
            <div class="log-reg-area sign">
              <h2 class="log-title" style="text-align: center;">Registrarme</h2>

              <form method="POST" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="login">
                <div class="form-group">
                  
                </div>
                <div class="form-group">
                  <input type="username" name="username" id="username" value="" required="">
                  <label class="control-label" for="input">Nombre de Usuario</label><i class="mtrl-select"></i>
                </div>
                <div class="form-group">
                  <input type="email" name="email" id="input" value="" required="">
                  <label class="control-label" for="input">Correo</label><i class="mtrl-select"></i>
                </div>

                <div class="form-group">
                  <input type="password" name="password" id="password" value="" required="">
                  <label class="control-label" for="input">Contraseña</label><i class="mtrl-select"></i>
                </div>

                <div class="form-group">
                  <input type="password" name="password2" id="password2" value="" required="">
                  <label class="control-label" for="input">Repetir contraseña</label><i class="mtrl-select"></i>
                </div>
                <div class="submit-btns">
                  <button class="mtr-btn signup" name="login" type="submit"><span>Registrarme</span></button>
                </div>
              </form>
              <br />
                <p class="">¿Ya tienes una cuenta? <a href="login.php" class="">Iniciar Sesión</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>

</body>
</html>