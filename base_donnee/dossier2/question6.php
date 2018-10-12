<?php
include('Connexion.php');
//nbrHomme,nbrFemme
$requette = $bdd->query("SELECT count(gender)as nombre_homme FROM `client` WHERE gender='male' " );
$requettes1 = $bdd->query("SELECT count(gender)as nombre_femme FROM `client` WHERE gender='female' " );
while($resultat = $requette->fetch())
{
    echo '<table>'.'<tr>'.'<td>'.$resultat['nombre_homme'].'</td>'.'</tr>'.'</table>';
   
}   
while($resultat = $requettes1->fetch())
{
    echo '<table>'.'<tr>'.'<td>'.$resultat['nombre_femme'].'</td>'.'</tr>'.'</table>';
   
}   
?>