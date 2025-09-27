<?php
/**
 * Contrôleur pour le panier
 */

class CartController {
    
    public function index() {
        $pageTitle = "Mon panier - " . SITE_NAME;
        $pageDescription = "Gérez votre panier d'achats";
        
        // Récupération des articles du panier
        $cartItems = Cart::getItems();
        $totalPrice = Cart::getTotalPrice();
        $totalItems = Cart::getTotalItems();
        
        // Chargement de la vue
        include VIEWS_PATH . '/layout/header.php';
        include VIEWS_PATH . '/cart/index.php';
        include VIEWS_PATH . '/layout/footer.php';
    }
    
    public function updateQuantity() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'] ?? null;
            $quantity = $_POST['quantity'] ?? 0;
            
            if ($productId !== null) {
                if (Cart::updateQuantity($productId, $quantity)) {
                    $_SESSION['success_message'] = "Quantité mise à jour.";
                } else {
                    $_SESSION['error_message'] = "Erreur lors de la mise à jour.";
                }
            }
        }
        
        header('Location: ?page=cart');
        exit;
    }
    
    public function removeItem() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['product_id'] ?? null;
            
            if ($productId !== null) {
                if (Cart::removeProduct($productId)) {
                    $_SESSION['success_message'] = "Produit supprimé du panier.";
                } else {
                    $_SESSION['error_message'] = "Erreur lors de la suppression.";
                }
            }
        }
        
        header('Location: ?page=cart');
        exit;
    }
    
    public function clear() {
        Cart::clear();
        $_SESSION['success_message'] = "Panier vidé avec succès.";
        
        header('Location: ?page=cart');
        exit;
    }
}
?>