<?php
include('Connexion.php');
//afficher toutes les femmes
$requette = $bdd->query("SELECT first_name,last_name,gender from client WHERE gender='Female'");
while($resultat = $requette->fetch())
{
    echo '<table>'.'<tr>'.'<td>'.$resultat['first_name'].'</td>'.'<td>'.$resultat['last_name'].'</td>'.'<td>'.$resultat['gender'].'</td>'.'</tr>'.'</td>'.'</table>';
}
?>