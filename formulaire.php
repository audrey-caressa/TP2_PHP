<?php

// Correspond à l’adresse IP de celui qui visualise la page.
echo getenv('REMOTE_ADDR');
// Correspond à l’adresse IP du serveur.
echo getenv('HTTP_HOST');
// Correspond au logiciel serveur Web utilisé.
echo getenv('SERVER_SOFTWARE');

echo $today;

function start_page($title)
{
    echo ' <!DOCTYPE html> 
            <html lang="fr">
                <head>
                    <title>  Formulaire  </title>
                </head>
                <body>
                 <hr/><br/><strong>Welcome</strong><br/><hr/>
                 <form action="data-processing.php" method="post">
                 <p> Identifiant </p>
                 <input type="text" name="identifiant" value="1212"/>
                 <p> Civilité (sexe) </p>
                 <br><input type="radio" name="sexe" value="Homme"/> Homme <br/>
                 <br><input type="radio" name="sexe" value="Femme"/> Femme <br/>
                 <br><input type="radio" name="sexe" value="Autre"/> Ne se prononce pas <br/>
                 <p> Email </p>
                 <input type="text" name="email" value="audrey.caressa@etu.univ-amu.fr"/>
                 <p> Mot de Passe </p>
                 <input type="password" name="motdepasse" value="motdepasse"/>
                 <p> Confirmation Mot de Passe </p>
                 <input type="password" name="motdepasse" value="motdepasse"/>
                 <p> Téléphone </p>
                 <input type="text" name="telephone" value="454545"/>
                 <p> Pays </p>
                 <select name="pays">
                    <option value="" name="pays"> Sélectionner le pays <option/>
                    <option value="france" name="pays"> France <option/>
                    <option value="allemagne" name="pays"> Allemagne <option/>
                    <option value="irlande" name="pays"> Irlande <option/>
                    <option value="royaume-uni" name="pays"> Royaume-Uni <option/>
                 <select/>
                 <p> Conditions générales </p>
                 <input type="checkbox" name="conditionsgenerales"/>
                 <input type="submit" name="action" value="mailer"/>
                 '; //end of line
}

start_page('title');

function end_page()
{
    echo '</body></html>';
}

end_page();

?>
