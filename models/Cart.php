<?php
/**
 * Modèle Cart - Gestion du panier
 */

class Cart {
    
    /**
     * Ajoute un produit au panier
     */
    public static function addProduct($productId, $quantity = 1) {
        $product = Product::findById($productId);
        if (!$product) {
            return false;
        }
        
        if (!isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] = [
                'product' => $product->toArray(),
                'quantity' => 0
            ];
        }
        
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
        return true;
    }
    
    /**
     * Met à jour la quantité d'un produit dans le panier
     */
    public static function updateQuantity($productId, $quantity) {
        if ($quantity <= 0) {
            return self::removeProduct($productId);
        }
        
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity'] = $quantity;
            return true;
        }
        
        return false;
    }
    
    /**
     * Supprime un produit du panier
     */
    public static function removeProduct($productId) {
        if (isset($_SESSION['cart'][$productId])) {
            unset($_SESSION['cart'][$productId]);
            return true;
        }
        return false;
    }
    
    /**
     * Vide complètement le panier
     */
    public static function clear() {
        $_SESSION['cart'] = [];
    }
    
    /**
     * Retourne tous les articles du panier
     */
    public static function getItems() {
        return $_SESSION['cart'] ?? [];
    }
    
    /**
     * Calcule le nombre total d'articles dans le panier
     */
    public static function getTotalItems() {
        $total = 0;
        foreach (self::getItems() as $item) {
            $total += $item['quantity'];
        }
        return $total;
    }
    
    /**
     * Calcule le prix total du panier
     */
    public static function getTotalPrice() {
        $total = 0;
        foreach (self::getItems() as $item) {
            $total += $item['product']['price'] * $item['quantity'];
        }
        return $total;
    }
    
    /**
     * Vérifie si le panier est vide
     */
    public static function isEmpty() {
        return empty($_SESSION['cart']);
    }
    
    /**
     * Retourne le nombre d'articles uniques dans le panier
     */
    public static function getUniqueItemsCount() {
        return count(self::getItems());
    }
}
?>