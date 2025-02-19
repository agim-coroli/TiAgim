<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $tilte ?></title>
</head>

<body>
    <header>
        <?php include("inc/banniere.php"); ?>
        <?php include("inc/menu.php"); ?>
    </header>
    <main>
        <div class="section cont_section">
            <h1>Pour nous contacter</h1>
            <div>
                <img src="img/contacts.jpg" alt="image d'enveloppe">
            </div>
            <p>Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</p>
            <form action="" method="post">
                <div>
                    <label for="">NOM :</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">PRENOM :</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">VILLE :</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">E-MAIL :</label>
                    <input type="email">
                </div>
                <div class="big_input">
                    <label for="">COMMENTAIRES :</label>
                    <input type="text">
                </div>
                <div class="btn">
                    <input type="button" value="Envoyez votre message">
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>