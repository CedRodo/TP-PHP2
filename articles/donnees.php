<?php if (isset($_GET['id'])==true) { $id = $_GET['id']; } ?>
<?php 
if (isset($_GET['mode'])==true) { 
     if ($_GET['mode']=='modif') {
         $mode='modif';
         echo "<h4 class=center>Modification de :</h4>";
         echo "<p class=center>".$_GET['titre']."</p>";
        } else {
        $mode='supp';
        echo "<h4 class=center>Insertion d'un article :</h4>";
        }
    }
    else {
        $mode='supp';
        echo "<h4 class=center>Insertion d'un article :</h4>";
    } 
 ?>

<div>

<form class="inserArticles" method="POST" action="<?php if ($mode=='modif') { echo 'modifok.php?id='.$id; } else if ($mode=='supp') { echo 'insertion.php'; } ?>">
<fieldset>
    <legend>Veuillez entrer les champs de données des articles</legend>
        <label for="ref">Référence de l'article :</label> <input class="inputRef" type="text" name="ref" id="ref" placeholder="Référence" required="required" />
        <label for="titre">Titre de l'article : </label> <input class="inputTitre" type="text" placeholder="Article" name="titre" id="titre" min="3" max="70" required="required" /> <br />
        <label for="description">Description de l'article : </label> <textarea placeholder="Vous pouvez donner une description de l'article en 5 caractères minimum et 750 caractères maximum" name="description" id="description" rows="15" cols="77" min="5" max="750" required="required"></textarea> <br />
        <label for="prix">Prix de l'article :</label> <input class="inputPrix" type="number" name="prix" id="prix" placeholder="Prix" value="0" min="0" max="10000" step="1" />

</fieldset>
<br/>    
<input class="formButton" type="submit" value="Envoyer" />
</form>
</div>
<?php require "footer.php"; ?>