<?php
    require_once "../controlador/ControladorRecuperarMat.php";
    $matricula = new ControladorRecuperarMat();
    if(isset($_POST['Siguiente'])) {
        $matricula->verificarUsuario();
    }
?>
<html>
<head>
    <title>Mapa FMAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="Estilos/login.css"
          type="text/css"
    />
</head>
<body class ="align">

<div class="contenedor" >
    <header>
        <div class="logo">
            <a href="principal.php">
                <img src="./Imagenes/logoFmat.png" class  ="logoPrincipal">
            </a>
        </div>
    </header>

        <div class="grid">

            <form action="" method="post" class="form login">

                <header class="login__header">
                    <h3 class="login__title">Recuperar contraseña</h3>
                </header>

                <div class="login__body">

                    <div class="form__field">
                        <input type="text" name="mat" placeholder="Matricula" required>
                    </div>

                </div>

                <footer class="login__footer">
                    <input type="submit" value="Siguiente" name="Siguiente">
                </footer>
              </form>

        </div>
    <footer>
        <section class="links">
            <a href="principal.php">Inicio</a>
            <a href="Futuro.php">Proyectos</a>
            <a href="Equipo.php">Contacto</a>
        </section>

        <div class="social">
            <a href="https://www.facebook.com/matematicas.uady.mx/" ><img src="Imagenes/facebook.png" class="logos"></a>
            <a href="#"><img src= "Imagenes/twitter.png" class="logos"></a>
        </div>
    </footer>

</div>

</body>

</html>