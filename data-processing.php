<?php

if isset($_POST['sexe'])
{
    $sexe=$_POST['sexe'];
}
else{
    $sexe=" ";
}

if isset($_POST['email'])
{
    $email=$_POST['email'];
}
else{
    $email=" ";
}

if isset($_POST['motdepasse'])
{
    $motdepasse=$_POST['motdepasse'];
}
else{
    $motdepasse=" ";
}

if isset($_POST['téléphone'])
{
    $téléphone=$_POST['téléphone'];
}
else{
    $téléphone=" ";
}

if isset($_POST['pays'])
{
    $pays=$_POST['pays'];
}
else{
    $pays=" ";
}

if isset($_POST['conditionsgenerales'])
{
    $conditionsgenerales=$_POST['conditionsgenerales'];
}
else{
    $conditionsgenerales=" ";
}

//$identifiant = $_POST['identifiant'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];
$téléphone = $_POST['téléphone'];
$pays = $_POST['pays'];
$conditionsgenerales = $_POST['conditionsgenerales'];
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