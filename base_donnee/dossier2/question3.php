<?php
include('Connexion.php');
//touts les états dont le nom commence par N
$requette = $bdd->query('SELECT country_code FROM client WHERE country_code like "N%"');

while($resultat = $requette->fetch())
{
    echo '<table>'.'<tr>'.'<td>'.$resultat['country_code'].'</td>'.'</tr>'.'</table>';
}
?>