<?php include "header.php"; ?>

<?php

require "startbd.php";
bd();

require_once "Articles.php";

?>

<h3>Article</h3>
<br/>
<br/>
<br/>
<?php
$entry = Articles::retrieveByPK($_GET['id']);
 
echo "<h4>Désignation : </h4>"."<p>$entry->titre</p>"."<br/><br/>";
 
echo "<h4>Référence : </h4>"."<p>$entry->ref</p>"."<br/><br/>";
 
echo "<h4>Description : </h4>";

echo "<p>$entry->description</p>"."<br/><br/>";

echo "<h4>Prix : </h4>"."<p>$entry->prix €</p>"."<br/><br/>";
?>

<a href="index.php">Retour vers la page d'accueil</a>

<?php require "footer.php"; ?>