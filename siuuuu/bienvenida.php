<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión")
                window.location = "portal.educativo.php"
            </script>
        ';
        header(location: portal.educativo.php);
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
  <link href="https://file.myfontastic.com/tc26fJHv8scB3d4vHQRRsV/icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/inicio.css">
  <link rel="shortcut icon" href="Image/icon.png">

  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>
    <div class="container-menu">
        <div class="redes-close">
    <label class="icon-facebook-square" onclick="location.href='https://www.facebook.com/Institucion-Educativa-051-Virgen-de-Fatima-114184020298721'"></label>
    <font class="close">X</font>
     </div>
    <ul>
        <li><a onclick="location.href='index.html'">Inicio</a></li>
        <li><a onclick="location.href='administrativo.html'">Plana administrativa</a></li>
        <li><a onclick="location.href='alumnos.html'">Alumnos</a></li>
        <li><a onclick="location.href='https://drive.google.com/drive/folders/1ewmwz-PWoIkmpv3dMl5_Eff6Kyg0E8-F?usp=sharing'">Pre</a></li>
        <li><a onclick="location.href='copyright.html'">Copyright</a></li>
        <li><a href="php/cerrar_session.php">Cerrar sesión</a></li>
    </ul>
</div>
<header>
<div class="container-header">
    <div class="logo-title">
        <label class="icon-menu"></label>
        <img src="image/logo.png" onclick="location.href='index.html'" alt="">
        <h4>Virgen de Fátima</h4>
    </div>
</div>
</header>
  <main>
    <article>
    <h1>Bienvenidos</h1>
      <hr>
      <p>Buenas a todos bienvenidos al portal educativo de la Institución educativa Virgen de Fátima, aquí podras escontrar libros, exámenes que te ayudaran para tu preparacion para así poder ingresar a la Universidad Ncional de Tumbes o la universidad que te propongas, esto lo hacemos con el propósito de ayudar a los estudiantes brindandoles mas información de la que te dan en las academias.</p>

      <p>Estos son los siguientes links que debes de seguir para tu preparación:</p>
      <a href="">Exámenes de Medicina Humana</a>
      <hr>
      <a href="">Exámenes Ordinarios UNTumbes</a>
      <hr>
      <a href="">Exámenes Excelencia</a>
    </article>
    <article2>
    <img src="image/unt.jpg" alt="">
    </article2>
    <article3>
        <img src="image/icon.png" alt="">
    </article3>
    <article4>
        <img src="image/Próximamente.png" alt="">
    </article4>
  </main>
  <footer>
    <label class="icon-facebook-square" onclick="location.href='https://www.facebook.com/Institucion-Educativa-051-Virgen-de-Fatima-114184020298721'"></label>
    <h1>© oozu company - derechos reservados 2022</h1>
</footer>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>