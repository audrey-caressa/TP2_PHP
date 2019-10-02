<?php

//fonction utile : var_dump()

//ouverture connexion serveur base de données
$dbLink = mysqli_connect('mysql-audreycaressa.alwaysdata.net', '189839', 'drey15000')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

//sélection base de données
mysqli_select_db($dbLink , 'audreycaressa_php')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

if (isset($_POST['identifiant']))
{
    $identifiant=$_POST['identifiant'];
}
else{
    $identifiant=" ";
}

if (isset($_POST['sexe']))
{
    $sexe=$_POST['sexe'];
}
else{
    $sexe=" ";
}

if (isset($_POST['email']))
{
    $email=$_POST['email'];
}
else{
    $email=" ";
}

if (isset($_POST['motdepasse']))
{
    $motdepasse=$_POST['motdepasse'];
}
else{
    $motdepasse=" ";
}

if (isset($_POST['telephone']))
{
    $telephone=$_POST['telephone'];
}
else{
    $telephone=" ";
}

if (isset($_POST['pays']))
{
    $pays=$_POST['pays'];
}
else{
    $pays=" ";
}

if (isset($_POST['today']))
{
    $today=$_POST['today'];
}
else{
    $today=" ";
}

$identifiant = $_POST['identifiant'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];
$telephone = $_POST['telephone'];
$pays = $_POST['pays'];
$today = date('Y-m-d');
$action = $_POST['action'];

$query='INSERT INTO user(civilite, email, motdepasse, telephone, pays, today)VALUES(';
$query.='"'.$sexe.'",';
$query.='"'.$email.'",';
$query.='"'.$motdepasse.'",';
$query.='"'.$telephone.'",';
$query.='"'.$pays.'",';
$query.='"'.$today.'")';

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
    echo 'Votre inscrition a bien été enregistrée !' . '<br/>';
}

if ($action == 'mailer')
{
    $message = 'Votre email : ' . PHP_EOL . $email . '<br/>';
    echo $message;
    $message = 'Votre mot de passe : ' . PHP_EOL . $motdepasse;
    echo $message;
    mail($email, 'test', $message);
}
else
{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>