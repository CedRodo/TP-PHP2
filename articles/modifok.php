<?php require 'header.php';
require "startbd.php";
bd();

require_once 'Articles.php';

$entry = Articles::retrieveByPK($_GET['id']);
?>

<br/>
<br/>

<?php

$entry->ref = $_POST['ref'];
$entry->titre = $_POST['titre'];
$entry->description = $_POST['description'];
$entry->prix = $_POST['prix'];
$entry->save();
?>
<p style='color: blue;'>Modification(s) réussie(s) !</p>
<br/><br/>
<a href="index.php">Retour vers la page d'accueil</a>

<?php
require 'footer.php';
?>

