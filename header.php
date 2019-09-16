<!DOCTYPE html>
<html>
<head>
	<!-- insertion d'une feuille de style css avec du php pour indiquer simplement où est logé, placé la feuille de style -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<meta charset="utf-8">
	<!--  Insére 2 fonction pour le titre de l'onglet et le slogan présent dans wordpress au niveau des "Réglages-->
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> </title>
</head>

<body>