<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'EcoRessource - Ressourcerie & Économie Circulaire'; ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo $pageDescription ?? 'Découvrez notre sélection d\'objets de seconde main reconditionnés. Vêtements, électroménager, meubles et vaisselle vintage. Économie circulaire et développement durable.'; ?>">
    <meta name="keywords" content="ressourcerie, économie circulaire, seconde main, vintage, reconditionnement, upcycling, développement durable">
    <meta name="author" content="EcoRessource">
    
    <!-- OpenGraph Meta Tags -->
    <meta property="og:title" content="<?php echo $pageTitle ?? 'EcoRessource - Ressourcerie & Économie Circulaire'; ?>">
    <meta property="og:description" content="<?php echo $pageDescription ?? 'Donnons une seconde vie aux objets avec notre sélection de produits reconditionnés et vintage.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    <meta property="og:site_name" content="EcoRessource">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%231abc9c'><path d='M12 2L13.5 8.5L20 10L13.5 11.5L12 18L10.5 11.5L4 10L10.5 8.5L12 2Z'/></svg>">
    
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <a href="/" class="logo">
                    <div class="logo-icon">🍃</div>
                    <div class="logo-text">
                        <h1>Les Trouvailles de Vitrolles</h1>
                        <p>Réemploi & Économie Circulaire</p>
                    </div>
                </a>

                <!-- Navigation -->
                <nav class="nav">
                    <a href="?page=home" class="nav-link <?php echo ($_GET['page'] ?? 'home') === 'home' ? 'active' : ''; ?>">
                        Accueil
                    </a>
                    <a href="?page=shop" class="nav-link <?php echo ($_GET['page'] ?? '') === 'shop' ? 'active' : ''; ?>">
                        Boutique
                    </a>
                    <a href="?page=admin" class="nav-link <?php echo ($_GET['page'] ?? '') === 'admin' ? 'active' : ''; ?>">
                        Admin
                    </a>
                    
                    <!-- Cart Icon -->
                    <a href="?page=cart" class="cart-icon">
                        🛒
                        <?php 
                        $totalItems = Cart::getTotalItems();
                        if ($totalItems > 0): 
                        ?>
                        <span class="cart-count"><?php echo $totalItems; ?></span>
                        <?php endif; ?>
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Messages de session -->
    <?php if (isset($_SESSION['success_message'])): ?>
        <div class="message message-success">
            <div class="container">
                <?php 
                echo $_SESSION['success_message']; 
                unset($_SESSION['success_message']);
                ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['error_message'])): ?>
        <div class="message message-error">
            <div class="container">
                <?php 
                echo $_SESSION['error_message']; 
                unset($_SESSION['error_message']);
                ?>
            </div>
        </div>
    <?php endif; ?>

    <main class="main">