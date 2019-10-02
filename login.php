<?php

function formul_login()
{
    echo ' <!DOCTYPE html> 
            <html lang="fr">
                <head>
                    <title>  Login  </title>
                </head>
                <body>
                 <hr/><br/><strong>Bienvenue !</strong><br/><hr/>
                 <form action="test-pass.php" method="post">
                 <p> Login </p>
                 <input type="text" name="login" value="1212aaa"/>
                 <p> Mot de Passe </p>
                 <input type="password" name="password" value="password"/>
                 <p> Confirmation Mot de Passe </p>
                 <input type="password" name="password" value="password"/>
                 <p></p>
                 <input type="submit" name="action" value="ok"/>
                 ';
}

formul_login();

?>