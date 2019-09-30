<?php

//ouverture connexion serveur base de données
$dbLink = mysqli_connect(dbHost, dbLogin, dbPass)
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

//sélection base de données
mysqli_select_db($dbLink , dbBd)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)

    //requêtes
//$query = 'SELECT id, email, date FROM user';

//envoi requêtes à la base de donnée

//if(!($dbResult = mysqli_query($dbLink, $query)))
//{
//    echo 'Erreur de requête<br/>';
//// Affiche le type d'erreur.
//    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
//// Affiche la requête envoyée.
//    echo 'Requête : ' . $query . '<br/>';
//    exit();
//}