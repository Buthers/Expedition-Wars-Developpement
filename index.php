<?php

$pages = array("accueil", "inscription", "presentation");

if(isset($_GET["page"]) && file_exists("App/Controleurs/Index/".$_GET["page"].".php") && in_array($_GET["page"], $pages))
{
	require("App/Serveur/database.php");
	require("App/Controleurs/Index/".$_GET["page"].".php");
}
else
{
	header("Location: index.php?page=accueil");
}

?>