<?php
session_start();
session_destroy();
require_once "./PHPLogin/newUserTests.php";
if(isset($_POST['submit'])) {
    $_SESSION['mat'] = $_POST['matricula'];
    $_SESSION['contra'] = $_POST['contra'];
    $_SESSION['confcontra'] = $_POST['confcontra'];
    verificarInfo();
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
<div class="contenedor">
    <header>
        <div class="logo">
            <a href="principal.php">
                <img src="Imagenes/logoFmat.png" class  ="logoPrincipal">
            </a>
        </div>
    </header>


            <div class="grid">
                <form method="post" action="" class="form login">
                    <header class="login__header">
                        <h3 class="login__title">Nuevo Usuario</h3>
                    </header>

                    <div class="login__body">
                        <div class="form__field">

                            <input type="text" name="matricula" placeholder="Matricula" required>

                        </div>
                        <div class="form__field">

                            <input type="password" name="contra" placeholder="Contraseña" required>

                        </div>
                        <div class="form__field">
                            <input type="password" name="confcontra" placeholder="Confirmación Contraseña" required>
                        </div>
                    </div>

                    <footer class="login__footer">
                        <input type="submit" name="submit" value="Crear Usuario">
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