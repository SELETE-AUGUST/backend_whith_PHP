<?php
$uri = $_SERVER["REQUEST_URI"];
$path= parse_url($uri, PHP_URL_PATH);
$path = ltrim($path, '/');
$segments= explode("/", $path);
$page = $segments[0];

switch ($page) {
    case '':
        include 'pages/exo-formulaire.php';
        break;

    case 'exo-formulaire':
        include 'pages/exo-formulaire.php';
        break;

        case 'login':
            include 'pages/login.php';
            break;

    default:
        include 'pages/404.php';
        break;
    }
    
    
