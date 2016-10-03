<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mi tienda:: Tu mundo de compras</title>


		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">


		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!-- Set Apple icons for when prototype is saved to home screen -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="touch-icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="touch-icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="touch-icons/apple-touch-icon-57x57.png">

		<!-- Include the compiled Ratchet CSS -->
		<link rel="stylesheet" href="css/ratchet.css">
		<link rel="stylesheet" href="css/snap.css">
		<link rel="stylesheet" href="css/vine.css">

		<!-- CARGAR EL JSON ->
		 <?php
			$nombreURL = "http://www.pymesv.com/cliente03w/producto.php";

			$nombreJSON = file_get_contents($nombreURL);

			$jnombres = json_decode($nombreJSON);

			$init_path = "product_img/";

		?>

	</head>
	<body>
	
