<?php
if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'geo':
            include("../template/geographie");
            $tilte = "geo";
            break;
        case 'hist':
            include("../template/histoire.php.php");
            $tilte = "hist";
            break;
        case 'cult':
            include("../template/culture.php");
            $tilte = "cult";
            break;
        case 'gal':
            include("../template/galerie.php");
            $tilte = "gal";
            break;
        case 'form':
            include("../template/contact.php");
            $tilte = "form";
            break;
        case 'link':
            include("../template/liens.php");
            $tilte = "link";
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
