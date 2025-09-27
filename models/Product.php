<?php
/**
 * Modèle Product - Gestion des produits
 */

class Product {
    private $id;
    private $name;
    private $price;
    private $image;
    private $category;
    private $description;
    
    public function __construct($id, $name, $price, $image, $category, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->description = $description;
    }
    
    // Getters
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getPrice() { return $this->price; }
    public function getImage() { return $this->image; }
    public function getCategory() { return $this->category; }
    public function getDescription() { return $this->description; }
    
    /**
     * Retourne tous les produits (données statiques pour la démo)
     */
    public static function getAll() {
        return [
            new Product(1, "Pull en laine vintage", 5, "https://images.unsplash.com/photo-1643935242152-bccdddd3b816?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwc3dlYXRlciUyMHdvb2x8ZW58MXx8fHwxNzU4ODk2NDkwfDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral", "Vêtements", "Pull en pure laine des années 80, parfait état"),
            new Product(2, "Lampe de bureau rétro", 4, "https://images.unsplash.com/photo-1666468352545-e284da389d46?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwdGFibGUlMjBsYW1wfGVufDF8fHx8MTc1ODg5NjQ5NHww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral", "Petit électroménager", "Lampe de bureau vintage, parfaitement fonctionnelle"),
            new Product(3, "Chaise en bois restaurée", 10, "https://images.unsplash.com/photo-1567359755029-04f642e9a88f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwd29vZGVuJTIwY2hhaXJ8ZW58MXx8fHwxNzU4ODk2NDgzfDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral", "Petits meubles", "Chaise en bois massif entièrement restaurée"),
            new Product(4, "Service à thé en céramique", 5, "https://images.unsplash.com/photo-1758348616109-4feb5538f3e6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwY2VyYW1pYyUyMGRpc2hlc3xlbnwxfHx8fDE3NTg4OTY0ODd8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral", "Vaisselle", "Service à thé complet en céramique vintage"),
            new Product(5, "Cintres vintage", 5, "https://images.unsplash.com/photo-1609709295948-17d77cb2a69b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwY2xvdGhlcyUyMGhhbmdlcnN8ZW58MXx8fHwxNzU4ODk2NDc2fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral", "Vêtements", "Lot de 5 cintres en bois vintage"),
            new Product(6, "Mixeur vintage", 5, "https://images.unsplash.com/photo-1680631626338-1b83981eec1c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx2aW50YWdlJTIwa2l0Y2hlbiUyMGFwcGxpYW5jZXN8ZW58MXx8fHwxNzU4ODk2NDc5fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral", "Petit électroménager", "Mixeur des années 70, entièrement reconditionné")
        ];
    }
    
    /**
     * Trouve un produit par son ID
     */
    public static function findById($id) {
        $products = self::getAll();
        foreach ($products as $product) {
            if ($product->getId() == $id) {
                return $product;
            }
        }
        return null;
    }
    
    /**
     * Filtre les produits par catégorie
     */
    public static function getByCategory($category) {
        if ($category === 'Tous') {
            return self::getAll();
        }
        
        $products = self::getAll();
        return array_filter($products, function($product) use ($category) {
            return $product->getCategory() === $category;
        });
    }
    
    /**
     * Retourne toutes les catégories disponibles
     */
    public static function getCategories() {
        return ["Tous", "Vêtements", "Petit électroménager", "Petits meubles", "Vaisselle"];
    }
    
    /**
     * Convertit le produit en tableau associatif
     */
    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'image' => $this->image,
            'category' => $this->category,
            'description' => $this->description
        ];
    }
}
?>