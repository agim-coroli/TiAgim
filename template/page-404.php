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
        <div class="section error_section">
            <h1>Erreur 404</h1>
            <div>
                <img src="img/404.jpg" alt="Photo d'erreur 404">
            </div>
            <p>Euh, la page demandée est introuvable !</p>
            <p>Le mieux est de trtourner a l'accueil.</p>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>