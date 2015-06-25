<?php
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
echo "Nombre de usuario recuperado de la variable de sesión:".$_SESSION['municipio'];
echo "<br><br>";
echo "La clave recuperada de la variable de sesión:".$_SESSION['localidad'];
?>
</body>
</html> 