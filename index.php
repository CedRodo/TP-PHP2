<?php require 'header.php' ?>

<div class="superGlobales">

<h2>Les variables superglobales</h2>

<p>Les variables superglobales $_GET, $_POST, $_SESSION et $_COOKIES permettent de &quot;traverser la fronti&egrave;re&quot; entre les pages du site. Contrairement aux variables globales, utilisables seulement sur l'ensemble d'un programme, et aux locales qui ne peuvent &ecirc;tre utilis&eacute;es qu'&agrave; l'int&eacute;rieur d'une fonction, ces superglobales peuvent recueillir et transporter les informations contenues d'une page pour les d&eacute;livrer sur une autre page.
    
La plupart des variables superglobales sont des tableaux (array) contenant des valeurs desquels on peut acc&eacute;der aux informations via leurs cl&eacute;s (nom, pr&eacute;nom, &acirc;ge, sexe, etc.), dans le cas de tableaux associatifs.</p>

<h3>$_GET</h3>

<p>$_GET va prendre l'information contenue dans un formulaire ou dans l'url, &agrave; la suite du point d'interrogation, chacune des informations &eacute;tant s&eacute;par&eacute;es par une esperluette. Dans cet exemple &quot;https://www.monsite.fr/informations.php?nom=Monnom&amp;prenom=Monpr&eacute;nom&amp;age=39&quot;, $_GET contiendra les informations sous forme d'un tableau associatif o&ugrave; la partie &agrave; gauche du signe = sera une cl&eacute; de ce tableau et la partie de droite la valeur de cette cl&eacute;. On a ainsi $_GET['nom'] avec la valeur monnom, $_GET['prenom'] avec la valeur monprenom et $_GET['age'] avec la valeur 39.
    
Elle peut aussi r&eacute;ceptionner les informations d'un formulaire, cr&eacute;&eacute; en HTML avec une balise &lt;form method=&quot;GET&quot; action=&quot;unepage.php&quot;&gt;. Il faut faire attention cela dit &agrave; ce que $_GET ne soit pas utilis&eacute;e pour des informations sensibles, comme le mot de passe par exemple.</p>

<h3>$_POST</h3>

<p>$_POST peut quant &agrave; elle recueillir des informations d'ordre confidentiel qui doivent &ecirc;tre s&eacute;curis&eacute;es. Celles-ci sont obtenues apr&egrave;s l'envoi d'un formulaire, cr&eacute;&eacute; en HTML avec une balise &lt;form method=&quot;POST&quot; action=&quot;unepage.php&quot;&gt;, dans lequel les cl&eacute;s et leurs valeurs correspondront respectivement aux valeurs des attributs name (ex. 'nom' pour name=&quot;nom&quot;, 'prenom' pour name=&quot;prenom&quot;, age pour name=&quot;age&quot;) d'une balise input (ex. &lt;input type=&quot;text&quot; name=&quot;nom&quot; /&gt;)  et aux valeurs entr&eacute;es dans un champs de saisie du formulaire, li&eacute; &agrave; son attribut name (ou la valeur qu'on peut donner par d&eacute;faut &agrave; value, value=&quot;Monnom&quot;, value=&quot;Monpr&eacute;nom&quot;, value=&quot;39&quot;).

Dans le cas du pr&eacute;nom &quot;Monpr&eacute;nom&quot; saisi dans la partie &quot;Entrez votre pr&eacute;nom&quot; du formulaire, cr&eacute;&eacute;e pr&eacute;alablement avec une balise &lt;input type=&quot;text&quot; name=&quot;prenom&quot; placeholder=&quot;Entrez votre pr&eacute;nom&quot; /&gt;, apr&egrave;s l'envoi du formulaire la variable superglobale et tableau associatif $_POST prendra comme cl&eacute; &quot;prenom&quot; et comme valeur &agrave; cette cl&eacute; &quot;Monpr&eacute;nom&quot;.</p>

<h3>$_SESSION</h3>

<p>$_SESSION est une variable superglobale et un tableau associatif, cr&eacute;&eacute;e en d&eacute;marrant une session par l'interm&eacute;diaire de session_start() et d&eacute;truite en lan&ccedil;ant session_destroy(). On peut lui ajouter les informations que l'on souhaite, ex. $_SESSION['nom'] = Monnom, ou les lui retirer, ex. unset($_SESSION[&quot;prenom&quot;]). $_SESSION est tr&egrave;s utile pour g&eacute;rer la partie connexion utilisateurs d'un site.</p>

<h3>$_COOKIE</h3>

<p>$_COOKIE est une variable superglobale et un tableau associatif qui peut stocker des informations g&eacute;n&eacute;r&eacute;es sur une page, selon les crit&egrave;res qui lui sont d&eacute;finis. Elle se cr&eacute;e par l'interm&eacute;diaire de setcookie(), ayant pour param&egrave;tres &quot;name&quot;, qui correspondra au nom donn&eacute; &agrave; une cl&eacute; de $_COOKIE, &quot;value&quot;, qui correspondra &agrave; la valeur de cette cl&eacute;, &quot;expire&quot;&quot; qui d&eacute;limitera le temps durant lequel le cookie restera pr&eacute;sent sur le disque de l'utilisateur avant de s'autod&eacute;truire, &quot;secure&quot; pour le protocole s&eacute;curit&eacute; HTTPS ou encore &quot;httponly&quot; pour d&eacute;finir le protocol autoris&eacute;. Ainsi, dans le cas de &quot;setcookie('nom', 'Monnom', time() + (86400 * 30))&quot;, $COOKIE aura pour cl&eacute; $COOKIE['nom'] avec une valeur &quot;Monnom&quot; et un d&eacute;lai d'expiration de 30 jours.</p>

<h3>$GLOBALS</h3>

<p>$GLOBALS est la premi&egrave;re superglobale de PHP. Elle r&eacute;f&eacute;rence toutes les variables globales d&eacute;clar&eacute;es dans le script et permet &eacute;galement de rendre global des variables locales. Dans le cas de la cr&eacute;ation d'une variable globale &quot;$nom='Monnom';&quot;, $GLOBALS[nom] sera automiquement cr&eacute;&eacute; en tant que variable super globale/tableau associatif avec pour cl&eacute; nom. La valeur de cette cl&eacute; sera alors &quot;Monnom&quot;.</p>

</p>

<h2>L'ORM'</h2>

<h2>Le CRUD</h2>

<h2>Le MVC</h2>

</div>


