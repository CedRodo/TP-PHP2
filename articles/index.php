<?php require_once 'header.php'; ?>

<div class="gestionArticles">

<h2>Gestion d'articles</h2>

<h3>Liste des articles</h3>

<br/>
<br/>

<form style="margin: 0 0 25px 25px;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label style ="text-decoration: none;" for="articles-select">Afficher les articles :</label>

<select name="affichage" id="articles-select" onchange="this.form.submit();">
    <option value="">--Type d'affichage--</option>
    <option value="coteacote">Côte à côte</option>
    <option value="dessusdessous">Dessus, Dessous</option>
</select>
</form>
<br/>
<br/>

<?php 
if (isset($_POST['affichage'])==false) {
    $_POST['affichage']="coteacote";
    }  
if ($_POST['affichage']=="coteacote") {
    include 'liste_articles.php';
    } elseif ($_POST['affichage']=="dessusdessous") {
    include 'liste_articles2.php';
    }

?>

<h3>Ajout d'article</h3>

<br/>

<?php require 'donnees.php' ?>
<?php require "footer.php"; ?>



