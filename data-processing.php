<?php

//ouverture connexion serveur base de données
$dbLink = mysqli_connect(mysql-audreycaressa.alwaysdata.net, '189839', '1234')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

//sélection base de données
mysqli_select_db($dbLink , user)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)

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

if (isset($_POST['téléphone']))
{
    $téléphone=$_POST['téléphone'];
}
else{
    $téléphone=" ";
}

if (isset($_POST['pays']))
{
    $pays=$_POST['pays'];
}
else{
    $pays=" ";
}

if (isset($_POST['conditionsgenerales']))
{
    $conditionsgenerales=$_POST['conditionsgenerales'];
}
else{
    $conditionsgenerales=" ";
}

if (isset($_POST['today']))
{
    $today=$_POST['today'];
}
else{
    $today=" ";
}

$query = 'INSERT INTO user (date, email ..) VALUES (\'' . $today . '\', \''
    . $email . '\', ' . ... . ')';

//$identifiant = $_POST['identifiant'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];
$téléphone = $_POST['téléphone'];
$pays = $_POST['pays'];
$conditionsgenerales = $_POST['conditionsgenerales'];
$today = date('Y-m-d');
$action = $_POST['action'];

if ($action == 'mailer')
{
    //$message = 'Voici vos identifiants d\'inscription : ' . PHP_EOL . $identifiant . '<br/>';
    //echo $message;
    $message = 'Email : ' . PHP_EOL . $email . '<br/>';
    echo $message;
    $message = 'Mot de passe : ' . PHP_EOL . $motdepasse;
    echo $message;
    mail($email, 'test', $message);
}
else
{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>