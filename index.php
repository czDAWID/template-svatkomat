<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Notifier source code">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="David Král">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Svátkomat</title>
  </head>
  <body>
<?php
include 'datum.class.php';
include 'svatek.class.php';
include 'navbar.class.php'
?>

<div class="kontejner">
	<div class="topnav">
	  <a <? Stranka::aktivniStranka("/uceni/index.php"); ?> href="/uceni/index.php">Domů</a>
	  <a <? Stranka::aktivniStranka("/uceni/hledat.php"); ?> href="/uceni/hledat.php">Hledat svátek</a>
	  <a <? Stranka::aktivniStranka("/uceni/kalendar.php"); ?> href="/kalendar">Kalendář</a>
	  <a <? Stranka::aktivniStranka("/uceni/kontakt.php"); ?> href="/kontakt">Kontakt</a>
	</div>

	<div class="obsah">
	<? include 'smerovac.php';?>
	</div>
</div>

</body>

</html>
