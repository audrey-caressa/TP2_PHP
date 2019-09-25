<?php

$identifiant = $_POST['identifiant'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];
$téléphone = $_POST['téléphone'];
$pays = $_POST['pays'];
$conditionsgenerales = $_POST['conditionsgenerales'];
$action = $_POST['action'];

if ($action == 'mailer')
{
    $message = 'Voici vos identifiants d\'inscription : ' . PHP_EOL . $identifiant . '<br/>';
    echo $message;
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