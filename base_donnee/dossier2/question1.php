<?php
include('Connexion.php');
//les gens du nom de palmer
$requette = $bdd->query("SELECT first_name,last_name FROM client WHERE last_name='palmer'");
while($resultat = $requette->fetch())
{
echo '<table>'.'<tr>'.'<td>'.$resultat['first_name'].'</td>'.'<td>'.$resultat['last_name'].'</tr>'.'</td>'.'</table>';
}
?>