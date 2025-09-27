<?php
/**
 * Contrôleur pour la page d'accueil
 */

class HomeController {
    
    public function index() {
        // Données pour la page d'accueil
        $pageTitle = "Accueil - " . SITE_NAME;
        $pageDescription = "L'économie circulaire à portée de main";
        
        // Catégories principales
        $categories = [
            [
                'icon' => '👕',
                'title' => 'Vêtements',
                'description' => 'Mode durable et seconde main',
                'color' => 'category-clothes'
            ],
            [
                'icon' => '⚡',
                'title' => 'Petit électroménager',
                'description' => 'Appareils reconditionnés',
                'color' => 'category-electro'
            ],
            [
                'icon' => '🪑',
                'title' => 'Petits meubles',
                'description' => 'Mobilier restauré avec soin',
                'color' => 'category-furniture'
            ],
            [
                'icon' => '🍽️',
                'title' => 'Vaisselle',
                'description' => 'Arts de la table vintage',
                'color' => 'category-dishes'
            ]
        ];
        
        // Nos valeurs
        $values = [
            [
                'icon' => '🔄',
                'title' => 'Réutiliser',
                'description' => 'Donner une seconde vie aux objets'
            ],
            [
                'icon' => '♻️',
                'title' => 'Recycler',
                'description' => 'Transformer pour mieux valoriser'
            ],
            [
                'icon' => '➖',
                'title' => 'Réduire',
                'description' => 'Consommer moins mais mieux'
            ]
        ];
        
        // Chargement de la vue
        include VIEWS_PATH . '/layout/header.php';
        include VIEWS_PATH . '/home/index.php';
        include VIEWS_PATH . '/layout/footer.php';
    }
}
?>