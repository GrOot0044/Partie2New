<h1>Exerice n°4 PHP 2</h1>

<h2>Afficher un lien hypertexte<br></h2>

<p>Consigne demandée : <br>

<br>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale. <br>

<br>le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique. <br>

<br>Particularité demandée :<br>

<br>On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>

<br>https://fr.wikipedia.org/wiki/<br>

<br>Le tableau passé en argument sera le suivant :<br>

<br>$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");<br></p>

<!DOCTYPE Html>
<html>
    <head>
        <h1>Tableau Associatif "Capitales"</h1>
    </head>

    <body>
        <table border="1">
            <tr>
                <th>Pays</th><th>Capitales</th><th>Liens</th>
            </tr>
            
            <?php
            $capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
            foreach ($capitales as $pays => $capitale) {
                echo "". $pays ."". $capitale ."";
            }
            ?>

    </table></body>

</html>