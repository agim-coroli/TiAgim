<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $tilte ?></title>
</head>

<body>
    <!-- inclusion de la banniere et du menu -->
    <?php include("inc/banniere.php"); ?>
    <header>
        <?php include("inc/menu.php"); ?>
    </header>
    <main>
        <div class="section accueil_section">
            <h1>Bienvenue sur notre site consacré à Dublin</h1>
            <div>
                <img src="img/armoiries.png" alt="Ecusson Irlandais">

            </div>
            <p> Dublin /dy.blɛ̃/a Écouter (en anglais : /ˈdʊbᵊlən/b ; en irlandais : Baile Átha Cliathc /ˈbˠalʲə aːhə ˈclʲiə/d ou Bleá Cliathe /ˌbʲlʲaː ˈclʲiə/d) est la plus grande ville de l'île d'Irlande et de l'État d'Irlande, dont elle est la capitale (Belfast étant la capitale de l'Irlande du Nord). La ville est située à proximité du point central de la côte orientale de l'île et au centre du comté de Dublin. Dublin est la plus grande ville d'Irlande en importance et en nombre d’habitants depuis le haut Moyen Âge. Elle est aujourd’hui classée à la soixante-sixième place dans l’index des places financières mondiales et a un des plus forts taux de développement parmi les capitales européennes. Dublin est le centre historique, politique, artistique, culturel, économique et industriel de l’Irlande.</p>
            <p> La population de la commune de Dublin est de 554 554 habitants au recensement de 2016. Au même recensement, le comté de Dublin — divisé en quatre zones administratives : ville de Dublin, Dublin Sud, Fingal et Dún Laoghaire-Rathdown — compte 1 270 603 habitants tandis que la région du Grand Dublin abrite 1 804 156 habitants.</p>
            <p class="links_para">
                <a href="./">Bienvenue sur notre site consacré à Dublin</a>
                <a href="?p=geo">Capitale multiple et centre diplomatique mondial</a>
                <a href="?p=hist">Histoire</a>
                <a href="?p=cult">Art et culture</a>
                <a href="?p=gal">Galerie Photo</a>
                <a href="?p=form">Pour nous contacter</a>
                <a href="?p=link">Quelques liens vers nos partenaires.</a>
            </p>
            <p class="link_wiki">
                <a href="https://fr.wikipedia.org/wiki/Berlin" target="_blank">En savoir plus sur Berlin</a>
            </p>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>