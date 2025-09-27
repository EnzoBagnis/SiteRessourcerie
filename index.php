<?php
/**
 * Point d'entrée principal de l'application Les Trésors de Vitrolles
 * Architecture MVC - Routeur principal
 */

ini_set('display_errors', '0');

// Démarrage de la session
session_start();

// Configuration
require_once 'config/config.php';
require_once 'config/database.php';

// Auto-chargement des classes
spl_autoload_register(function ($class) {
    $paths = [
        'models/',
        'controllers/',
        'includes/',
        'logs/'
    ];
    
    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Initialisation du panier en session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Analyse de l'URL
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestUri = trim($requestUri, '/');

// Par défaut
$_SESSION['PAGE'] = 'home';
$action = $_GET['action'] ?? 'index';

if (!empty($requestUri)) {
    $segments = explode('/', $requestUri);
    $_SESSION['PAGE'] = $segments[0];
}

// Routage des pages
switch ($_SESSION['PAGE']) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'shop':
        $controller = new ShopController();
        if ($action === 'add_to_cart') {
            $controller->addToCart();
        } else {
            $controller->index();
        }
        break;
        
    case 'cart':
        $controller = new CartController();
        if ($action === 'update') {
            $controller->updateQuantity();
        } elseif ($action === 'remove') {
            $controller->removeItem();
        } elseif ($action === 'clear') {
            $controller->clear();
        } else {
            $controller->index();
        }
        break;

    case 'admin':
        $controller = new AdminController();
        if ($action === 'login') {
            $controller->login();
        } elseif ($action === 'logout') {
            $controller->logout();
        } else {
            $controller->index();
        }
        break;
        
    default:
        $controller = new HomeController();
        $controller->index();
        break;
}
