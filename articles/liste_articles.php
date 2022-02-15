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
    <article class="produit">
        <p class="ref">Ref. : <?php echo "$unarticle->ref"; ?></p>
        <p class="titre"><a href="article.php?id=<?php echo "$unarticle->id";?>"><?php echo "$unarticle->titre";?></a></p>
        <p class="description"><?php echo "$unarticle->description";?>
        <p class="prix"><span style="text-decoration: underline;">Prix :</span> <?php echo "$unarticle->prix €";?></p>
        <p class="photos"><img src="<?php echo "$img";?>"></p>
        <p class="modsup"><button><a href="modification.php?id=<?php echo $unarticle->id."&mode=modif&titre=".$unarticle->titre?>">Modifier</a></button><button><a href="suppression.php?id=<?php echo $unarticle->id;?>"> Supprimer </a></button></p>
    </article>
<?php
}
?>

</section>