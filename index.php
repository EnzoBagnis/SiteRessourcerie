<?php
/**
 * Point d'entrée principal de l'application Les Trouvailles de Vitrolles
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
        'includes/'
    ];
    
    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Routage simple
$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? 'index';

// Initialisation du panier en session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Routage des pages
switch ($page) {
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
?>