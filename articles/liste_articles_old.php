<?php
// Connecter à la BD
require "startbd.php";
bd();
require_once "Articles.php";
// recuperer l ensemble des données des utilisateurs
$entry = Articles::all();

foreach($entry as $unarticle){
    $img=$unarticle->img;
    echo "Ref. : ".$unarticle->ref."<br/><br/>";
    echo "<a href='article.php?id=".$unarticle->id."'>$unarticle->titre</a><br/><br/>";
    echo "$unarticle->description<br/><br/>";
    echo "$unarticle->prix"." €<br/><br/>";
    echo "<img class=photosListe src='$img'/>"."<br/><br/>";
    // echo "<img src=".$unarticle->img."/>"."<br/><br/>";
    echo "<button><a href='modification.php?id=".$unarticle->id."&mode=modif&titre=".$unarticle->titre."'>Modifier </a></button> - <button><a href='suppression.php?id=".$unarticle->id."'> Supprimer </a></button><hr>";
    //<a href='unutilisateur.php?id=".$unarticle->id."'>$unarticle->prenom."  ".$unarticle->nom."</a> <hr>";
}


// Recuperer l'ensemble des donnes de la tables utilisateurs
?>