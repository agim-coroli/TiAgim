<?php
if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'geo':
            $tilte = "geo";
            include("../template/geographie.php");
            break;
        case 'hist':
            $tilte = "hist";
            include("../template/histoire.php");
            break;
        case 'cult':
            $tilte = "cult";
            include("../template/culture.php");
            break;
        case 'gal':
            $tilte = "gal";
            include("../template/galerie.php");
            break;
        case 'form':
            $tilte = "form";
            include("../template/contact.php");
            break;
        case 'link':
            $tilte = "link";
            include("../template/liens.php");
            break;
        default:
            $tilte = "404";
            include("../template/page-404.php");
            break;
    }
} else {
    $tilte = "accueil";
    include("../template/accueil.php");
}
