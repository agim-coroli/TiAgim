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
        <div class="section link_section">
            <h1>Quelques liens vers nos partenaires.</h1>
            <div>
                <img src="img/liens.jpg" alt="">
            </div>
            <p>D'autres capitales se sont associées à notre site.</p>
            <div class="list_container">
                <ul>
                    <li><a href="">Berlin</a></li>
                    <li><a href="">Vienne</a></li>
                    <li><a href="">Paris</a></li>
                    <li><a href="">Madrid</a></li>
                    <li><a href="">Rome</a></li>
                    <li><a href="">Londres</a></li>
                </ul>
                <ul>
                    <li><a href="">Lisbonne</a></li>
                    <li><a href="">Prague</a></li>
                    <li><a href="">Amsterdam</a></li>
                    <li><a href="">Copenhague</a></li>
                    <li><a href="">Dublin</a></li>
                    <li><a href="">Athènes</a></li>
                </ul>
                <ul>
                    <li><a href="">Sofia</a></li>
                    <li><a href="">Varsovie</a></li>
                    <li><a href="">Helsinki</a></li>
                    <li><a href="">Stockholm</a></li>
                    <li><a href="">Oslo</a></li>
                    <li><a href="">Budapest</a></li>
                </ul>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>