<?php
session_start();
$_SESSION['estado']=$_REQUEST['estado2'];
$_SESSION['municipio']=$_REQUEST['municipio2'];
$_SESSION['localidad']=$_REQUEST['localidad2'];

$_SESSION['latitudA']=$_REQUEST['latitudA'];
$_SESSION['longitudA']=$_REQUEST['longitudA'];

$_SESSION['latitudB']=$_REQUEST['latitudB'];
$_SESSION['longitudB']=$_REQUEST['longitudB'];

$_SESSION['latitudC']=$_REQUEST['latitudC'];
$_SESSION['longitudC']=$_REQUEST['longitudC'];
?>
<html>
<head>
<title>Problema</title>
	<script language="JavaScript">
		location.href="FTMapa.php"
	</script>
</head>
<body> 
</body>
</html> 