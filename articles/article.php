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
$entry = Articles::retrieveByPK($_GET['id']); ?>

<a href="index.php">Retour vers la page d'accueil</a>
<br/>
<br/>
<section id="article">
<h4>Désignation : </h4>

<p><?php echo $entry->titre; ?></p>
<br/>
<br/>
<h4>Référence : </h4>
<p><?php echo $entry->ref; ?></p>
<br/>
<br/>
<h4>Description : </h4>
<p><?php echo $entry->description; ?></p>
<br/>
<br/>
<h4>Prix : </h4>
<p><?php echo $entry->prix." €"; ?></p>
<p><img src="<?php echo $entry->img;?>"><p>
</section>

<a href="index.php">Retour vers la page d'accueil</a>

<?php require "footer.php"; ?>