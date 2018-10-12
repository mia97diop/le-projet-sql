<?php
include('Connexion.php');
// tous les email qu contiennent google
$requette = $bdd->query('SELECT email FROM client WHERE email like "%google%"');

while($resultat = $requette->fetch())
{
    echo '<table>'.'<tr>'.'<td>'.$resultat['email'].'</td>'.'</tr>'.'</table>';
}
?>