<?php
/**
 * Contrôleur pour la boutique
 */

class ShopController {
    
    public function index() {
        $pageTitle = "Boutique - " . SITE_NAME;
        $pageDescription = "Découvrez notre sélection d'objets de seconde main";
        
        // Récupération des paramètres
        $selectedCategory = $_GET['category'] ?? 'Tous';
        
        // Récupération des produits
        $products = Product::getByCategory($selectedCategory);
        $categories = Product::getCategories();
        
        // Chargement de la vue
        include VIEWS_PATH . '/layout/header.php';
        include VIEWS_PATH . '/shop/index.php';
        include VIEWS_PATH . '/layout/footer.php';
    }
    
    public function addToCart() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'] ?? null;
            $quantity = $_POST['quantity'] ?? 1;
            
            if ($productId && Cart::addProduct($productId, $quantity)) {
                // Redirection avec message de succès
                $_SESSION['success_message'] = "Produit ajouté au panier avec succès !";
            } else {
                $_SESSION['error_message'] = "Erreur lors de l'ajout au panier.";
            }
        }
        
        // Redirection vers la boutique
        header('Location: ?page=shop');
        exit;
    }
}
?>