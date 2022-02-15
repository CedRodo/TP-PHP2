<?php require_once 'header.php' ?>

<div class="gestionArticles">

<h2>Gestion d'articles</h2>

<h3>Liste des articles</h3>

<br/>
<br/>

<?php
    // $_POST['affichage']="cote";
?>
<!-- <form method="POST" action="index.php">
<label style ="text-decoration: none;" for="articles-select">Affichage des articles:</label>

<select name="affichage" id="articles-select">
    <option value="">--Choisissez un style d'affichage--</option>
    <option value="cote">Côte à côte</option>
    <option value="suite">À la suite</option>
</select>
<input type="submit">Envoyer</input>
</form>
<br/>
<br/> -->

<?php 
// if (isset($_GET['articles'])==false) {
//     include 'liste_articles.php';
// } 
// if ($_POST['affichage']=="cote") {
//     include 'liste_articles.php';
//     } elseif ($_POST['affichage']=="suite") {
//     include 'liste_articles_old.php';
//     }
?>

<?php
require 'liste_articles.php'
?>

<h3>Ajout d'articles</h3>

<br/>

<?php require 'donnees.php' ?>




