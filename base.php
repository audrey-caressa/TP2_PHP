<?php

//ouverture connexion serveur base de données
$dbLink = mysqli_connect(mysql-audreycaressa.alwaysdata.net, '189839', '1234')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

//sélection base de données
mysqli_select_db($dbLink , user)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)

    //requêtes
$query = 'SELECT id, email, date FROM user';

//envoi requêtes à la base de données

if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}


while ($dbRow = mysqli_fetch_assoc($dbResult)) //on récupère les résultats de la requête {
    echo $dbRow['identifiant'] . '<br/>';
    echo $dbRow['email'] . '<br/>';
    echo $dbRow['date'] . '<br/>';
    echo '<br/><br/>';
}
