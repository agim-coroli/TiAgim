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
    <div class="section gal_section">
        <h1>Galerie Photo</h1>
        <div>
            <div>
                <img src="img/480px_DublinTheCustomHouse-2014-10.jpg" alt="House custom" onclick="biggerPics('1280px_DublinTheCustomHouse-2014-10.jpg')" id="gal_section_img">
                <p>House custom</p>
            </div>
            <div>
                <img src="img/480px_GeorgeSalmonTrinityCollegeDublin.jpg" alt="College dublin" onclick="biggerPics('1280px_GeorgeSalmonTrinityCollegeDublin.jpg')" id="gal_section_img2">
                <p>College Dublin</p>
            </div>
            <div>
                <img src="img/480px_La_cathédrale_Saint-Patrick.jpg" alt="Cathedral saint patrick" onclick="biggerPics('1280px_La_cathédrale_Saint-Patrick.jpg')" id="gal_section_img3">
                <p>Cathedral saint patrick</p>
            </div>
            <div>
                <img src="img/480px_O'Connell_Bridge.jpg" alt="Pont O'connell" onclick="biggerPics('1280px_OConnell_Bridge.jpg')" id="gal_section_img4">
                <p>Pont O'connell</p>
            </div>
            <div>
                <img src="img/480px_OConnell_Street_Dublin.jpg" alt="Rue O'connell" onclick="biggerPics('1280px_OConnell_Street_Dublin.jpg')" id="gal_section_img5">
                <p>Rue O'connell</p>
            </div>
            <div>
                <img src="img/480px_Samuel_Beckett_Bridge.jpeg" alt="Pont Samuel Becket" onclick="biggerPics('1280px_Samuel_Beckett_Bridge.jpeg')" id="gal_section_img6">
                <p>Pont Samuel Becket</p>
            </div>
        </div>
    </div>

    <div class="overlay" id="overlay" onclick="toggleOverlay()">
        <img id="imageAfficher" src="" alt="Image agrandie">
    </div>
    <div onclick="goUp()" id="upArrow">🔝</div>
    </main>

<script src="./js/lightbox.js"></script>
</body>

</html>
