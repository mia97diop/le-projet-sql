<?php
//le nbres d'enrigistrement par états
include('Connexion.php');
$requette = $bdd->query('SELECT  country_code, COUNT (*) comme n ° FROM client GROUP BY country_code ORDER BY country_code ASC )');
while($resultat = $requette->fetch())
{
    echo '<table>'.'<tr>'.'<td>'.$resultat['country_code'].'</td>'.'</tr>'.'</table>';
}
?>