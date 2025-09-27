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
            new Product(1, "Pull en laine vintage", 5,     "public/img/1.webp", "Vêtements", "Pull en pure laine des années 80, parfait état"),
            new Product(2, "Lampe de bureau rétro", 4,     "public/img/2.webp", "Petit électroménager", "Lampe de bureau vintage, parfaitement fonctionnelle"),
            new Product(3, "Chaise en bois restaurée", 10, "public/img/3.webp", "Petits meubles", "Chaise en bois massif entièrement restaurée"),
            new Product(4, "Service à thé en céramique", 5,"public/img/4.webp", "Vaisselle", "Service à thé complet en céramique vintage"),
            new Product(5, "Cintres vintage", 5,           "public/img/5.webp", "Vêtements", "Lot de 5 cintres en bois vintage"),
            new Product(6, "Mixeur vintage", 5,            "public/img/6.webp", "Petit électroménager", "Mixeur des années 70, entièrement reconditionné")
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