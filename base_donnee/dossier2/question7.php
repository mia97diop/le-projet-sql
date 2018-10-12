<?php
$requette = $bdd->query("SELECT DATEDIFF(year,'birth_date',getedate([ int $timestamp = time()])) AS Age" );
while($resultat = $requette->fetch())
    {
        echo '<table>'.'<tr>'.'<td>'.$resultat['birth_date'].'</td>'.'</tr>'.'</table>';
    }   
?>