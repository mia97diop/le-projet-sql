<?php
include('Connexion.php');
//les gens du nom de palmer
$requette = $bdd->query("SELECT *FROM acs inner join departement on(id_dept = id_depart)");
while($resultat = $requette->fetch())
{
echo '<table border="2px">'.'<tr>'.'<td>'.$resultat['first_name'].'</td>'.'<td>'.$resultat['last_name'].'</td>'.'<td>'.$resultat['address'].'</td>'.'<td>'.$resultat['nom'].'</td>'.'</tr>'.'<br>'.'</table>';
}
?>



