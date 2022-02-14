<?php require 'header.php';
require "startbd.php";
bd();

require_once 'Articles.php';

$entry = Articles::retrieveByPK($_GET['id']);

$articlesupp = $entry->titre;
 ?>
<?php
echo "<br/><br/>";
$entry->delete();
?>
<p>L'article "<?php echo $articlesupp; ?>" a bien été supprimé.</p>
<br/><br/>
<a href="index.php">Retour vers la page d'accueil</a>

<?php
require 'footer.php';
?>