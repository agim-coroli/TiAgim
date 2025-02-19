<?php
if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'geo':
            include ("../template/");
            break;
        case 'hist':
            include ("../template/geographie.php");
            break;
        case 'cult':
            include ("../template/culture.php");
            break;
        case 'gal':
            include ("../template/galerie.php");
            break;
        case 'form':
            include ("../template/contact.php");
            break;
        case 'link':
            include ("../template/liens.php");
            break;
        default:
            include("../template/page-404.php");
            break;
    }
} else {
    include("../template/accueil.php");
}
