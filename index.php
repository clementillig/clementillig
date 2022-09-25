<!DOCTYPE html>

<html lang="fr">

<head>

<meta charset="utf-8" />

<title> Index </title> 

        <link rel="stylesheet"  href="style.css" type="text/css"  media="screen" />


</head>


<body>

<header>
              
			  
</header>
			 
<nav>
<ul>
	<li><a href="index.php?p=Musique">Index</a></li>
	<li><a href="index.php?p=MusiqueAm%C3%A9rique">Amérique</a></li>
	<li><a href="index.php?p=MusiqueEurope">Europe</a></li>
	<li><a href="index.php?p=MusiqueAfrique">Afrique</a></li>
	<li><a href="index.php?p=MusiqueAsie">Asie</a></li>
	<li><a href="index.php?p=Formulaire">Formulaire</a></li>
</ul>
</nav>			 



<main>
<?php
if(isset($_GET['p'])) 
  { $fichier='include/'.$_GET['p'].'.html';
    if(file_exists($fichier)) include($fichier);
    else echo "Erreur 404 : la page demandée n’existe pas";
  }
else echo "Erreur : paramètre manquant";
?>
</main>



</body>



</html>