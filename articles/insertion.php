<?php



if ((isset($_POST['ref'])==true) && 
     (isset($_POST['titre'])==true) &&
     (isset($_POST['description'])==true) &&
     (isset($_POST['prix'])==true))
    
    {
      require "startbd.php";
      bd();
      // Insertion BD
      
        require_once "Articles.php";

        $entry = new Articles;
        $entry->ref = $_POST['ref'];
        $entry->titre = $_POST['titre'];
        $entry->description = $_POST['description'];
        $entry->prix = $_POST['prix'];
        $entry->img = $_POST['img'];
        $entry->save();
    }

?>

<p>L'article "<?php echo $entry->titre; ?>" a bien été ajouté.</p>
<br/><br/>
<a href="index.php">Retour vers la page d'accueil</a>



<?php require "footer.php"; ?>