# Les Trouvailles de Vitrolles - Application PHP MVC

## Description

Les Trouvailles de Vitrolles est une application web de ressourcerie développée en PHP avec une architecture MVC bien structurée. L'application permet de gérer une boutique en ligne spécialisée dans les objets de seconde main, reconditionnés et upcyclés, dans l'esprit de l'économie circulaire.

## Fonctionnalités

### 🏠 Page d'accueil
- Présentation de la mission éco-responsable
- Mise en avant des catégories principales
- Section "Nos valeurs" (3R : Réduire, Réutiliser, Recycler)
- Design moderne et éco-conçu

### 🛍️ Boutique
- Catalogue de produits avec filtrage par catégorie
- Ajout au panier avec gestion des quantités
- Interface responsive et accessible
- Images optimisées

### 🛒 Panier
- Gestion complète du panier (ajout, modification, suppression)
- Calcul automatique des totaux
- Interface intuitive pour la modification des quantités
- Récapitulatif de commande

### 👤 Administration
- Authentification sécurisée
- Tableau de bord avec statistiques
- Gestion des produits (interface de démonstration)
- Suivi de l'activité

## Architecture technique

### Structure MVC
```
├── index.php              # Point d'entrée et routeur
├── config/
│   ├── config.php         # Configuration générale
│   └── database.php       # Configuration base de données
├── controllers/
│   ├── HomeController.php
│   ├── ShopController.php
│   ├── CartController.php
│   └── AdminController.php
├── models/
│   ├── Product.php        # Modèle produit
│   └── Cart.php          # Modèle panier
├── views/
│   ├── layout/
│   │   ├── header.php
│   │   └── footer.php
│   ├── home/
│   ├── shop/
│   ├── cart/
│   └── admin/
└── public/
    ├── css/
    │   └── style.css      # Styles CSS optimisés
    └── js/
        └── script.js      # JavaScript d'amélioration UX
```

### Technologies utilisées
- **PHP 7.4+** : Langage principal
- **HTML5** : Structure sémantique
- **CSS3** : Styles natifs optimisés
- **JavaScript** : Interactions côté client
- **Sessions PHP** : Gestion du panier et authentification



### Identifiants admin par défaut
- **Utilisateur** : `admin`
- **Mot de passe** : `password123`

### Fonctionnalités du panier
- Les articles sont stockés en session PHP
- Persistance durant la session de navigation
- Calculs automatiques des totaux

## Éco-conception

L'application respecte les principes d'éco-conception :

### Performance
- CSS et JavaScript optimisés et minimalistes
- Images externes via Unsplash (pas de stockage local)
- Code PHP efficace avec faible empreinte mémoire
- Absence de frameworks lourds

### Accessibilité
- Structure HTML5 sémantique
- Contrastes de couleurs respectant WCAG
- Navigation au clavier fonctionnelle
- Labels et descriptions appropriés

### Sobriété numérique
- Code source léger et bien commenté
- Fonctionnalités essentielles uniquement
- Chargement rapide des pages
- Pas de tracking ou scripts externes

## Sécurité

### Mesures implémentées
- Protection contre les injections XSS (`htmlspecialchars`)
- Validation des données côté serveur
- Sessions sécurisées pour l'authentification
- Tokens CSRF (à implémenter pour la production)

### Pour la production
- Utiliser des mots de passe sécurisés et hachés
- Implémenter HTTPS
- Ajouter une base de données sécurisée
- Mettre en place des logs d'audit


### Fonctionnalités additionnelles
- Système de commandes complet
- Gestion des utilisateurs clients
- Interface d'administration complète
- API REST pour mobile
- Système de newsletter éco-responsable

## Maintenance

### Logs
- Erreurs PHP dans les logs serveur
- Console JavaScript pour le debugging
- Messages de session pour le feedback utilisateur

### Mise à jour
- Structure modulaire facilitant les évolutions
- Séparation claire MVC
- Code documenté et maintenir

## Support

Pour toute question ou amélioration, consulter la documentation dans le code source ou contacter l'équipe de développement.

---

**Les Trouvailles de Vitrolles** - Développé avec ❤️ pour l'économie circulaire