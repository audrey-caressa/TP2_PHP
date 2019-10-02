<?php

$login = $_POST['login'];
$password = $_POST['password'];

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