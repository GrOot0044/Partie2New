<h1>Exerice n°2 PHP 2</h1>

<p>Soit le tableau suivant :<br>
$capitales = array<br>
<br>("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome").<br>
<br>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.<br>
<br>Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Résultat demandé</h2>
<p>Affichage demandé<br>
<br>Un tableau associatif intégrant les Pays (1ère colonne) et leurs capitales respectives (2ème colonne)<br></p>

 <!-- Créer le Tableau (appeler la fonction "table" & avec "Border" Définir le contour -->
<!-- <table border=1> -->

<!--Entête du Tableau -->
    <thead>
        <tr><!-- Créer les cases de l'entête du tableau -->
            <th>Pays</th> <!-- Créer la 1ère cellule (1ère colonne) et la compléter par le mot souhaité -->
            <th>Capitales</th> <!-- Créer la 2ème cellule (2ème colonne) et la compléter par le mot souhaité -->
        </tr>
    </thead>

<!--Corps du Tableau -->
<tbody>
    <tr>
        <td>France</td> <!--Créer plusieurs td groupés avec td*4 par exemple (apparition de 4 td en auto) -->
        <td>Paris</td>
    </tr>
    
    <tr>
        <td>Allemagne</td> 
        <td>Berlin</td>
    </tr>
    <tr>
        <td>USA</td> 
        <td>Washington</td>
    </tr>
    
    <tr>
        <td>Italie</td>
        <td>Rome</td>
    </tr>
</tbody>
</table>

<?php

$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
];


foreach($capitales as $pays => $capitale){
    echo "$pays a pour capitale : $capitale<br>";

}

echo afficherTableau($capitales);

function afficherTableau($capitales){
    ksort($capitales);
    $result = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitales</th> 
                        </tr>
                    </thead>
            <tbody>";

    foreach($capitales as $pays => $capitale) {
        $result .="<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                  </tr>";
    }

    $result .= "</tbody></table>";
    return $result;
};


?>