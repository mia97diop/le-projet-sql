<?php
//connection
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=aminata_diop','root','');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
//fin connection 
/*$requette = $bdd->query("SELECT * FROM client");

while($resultat = $requette->fetch())
{
    echo '<table>'.'<tr>'.'<td>'.'<strong>'.$resultat['first_name'].'</strong>'.'</td>'.'<td>'.$resultat['last_name'].'</td>'.'<td>'.$resultat['email'].'</td>'.'<td>'.$resultat['gender'].'</td>'.'<td>'.$resultat['ip_address'].'</td>'.'<td>'.$resultat['birth_date'].'</td>'.'<td>'.$resultat['country_code'].'</td>'.'<td>'.$resultat['avatar_url'].'</td>'.'</tr>'.'</table>';
}*/
?>
