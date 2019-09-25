<?php

function start_page($title)
{
    echo ' <!DOCTYPE html> 
            <html lang="fr">
                <head>
                    <title>  Formulaire  </title>
                </head>
                <body> <hr/><br/><strong>Test</strong><br/><hr/> '; //end of line
}

function end_page()
{
    echo '</body></html>';
}

// Correspond à l’adresse IP de celui qui visualise la page.
echo getenv('REMOTE_ADDR');
// Correspond à l’adresse IP du serveur.
echo getenv('HTTP_HOST');
// Correspond au logiciel serveur Web utilisé.
echo getenv('SERVER_SOFTWARE');
phpinfo();

?>
