<?php
require "startbd.php";
bd();
require_once "Articles.php";
$entry = Articles::all();
?>

<section id="listeArticles">

<?php
foreach($entry as $unarticle){
    $img=$unarticle->img; ?>
    <article class="produit2">
        <p class="ref">Ref. : <?php echo "$unarticle->ref"; ?></p>
        <p class="titre"><a href="article.php?id=<?php echo "$unarticle->id";?>"><?php echo "$unarticle->titre";?></a></p>
        <p class="description"><?php echo "$unarticle->description";?>
        <p class="prix"><span>Prix : <?php echo "$unarticle->prix €";?></span></p>
        <p class="photos"><img src="<?php echo "$img";?>"></p>
        <p class="modsup"><button><a href="modification.php?id=<?php echo $unarticle->id."&mode=modif&titre=".$unarticle->titre."&ref=".$unarticle->ref."&prix=".$unarticle->prix;?>">Modifier</a></button><button><a href="suppression.php?id=<?php echo $unarticle->id;?>"> Supprimer </a></button></p>
        <hr>
    </article>
<?php
}
?>

</section>