<?php

//ouverture connexion serveur base de données
$dbLink = mysqli_connect('mysql-audreycaressa.alwaysdata.net', '189839', 'drey15000')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

//sélection base de données
mysqli_select_db($dbLink , 'audreycaressa_php')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

if (isset($_POST['login']))
{
    $login=$_POST['login'];
}
else{
    $login=" ";
}

if (isset($_POST['password']))
{
    $password=$_POST['password'];
}
else{
    $password=" ";
}

$login = $_POST['login'];
$password = $_POST['password'];

$query='INSERT INTO user(login, password)VALUES(';
$query.='"'.$login.'",';
$query.='"'.$password.'")';

if (isset($_POST['login']) && isset($_POST['password']))
{
    header('page.php');
}
else
{
    start_page('erreur') ;
    ...
}

if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/><br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
else
{
    echo 'Connexion réussie !' . '<br/>';
}

if ($action == 'ok')
{
    echo 'Votre authentification est un succès !' . '</br>';
    $message = 'Votre login : ' . PHP_EOL . $login . '<br/>';
    echo $message;
    $message = 'Votre mot de passe : ' . PHP_EOL . $password;
    echo $message;
}
else
{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}