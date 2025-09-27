<section class="section">
    <div class="container">
        <!-- Header -->
        <div class="section-title">
            <h2>Notre boutique</h2>
            <p>Découvrez notre sélection d'objets de seconde main, reconditionnés avec soin</p>
        </div>

        <!-- Filter -->
        <div class="filters">
            <?php foreach ($categories as $category): ?>
            <a href="/shop?category=<?php echo urlencode($category); ?>" 
               class="filter-btn <?php echo $selectedCategory === $category ? 'active' : ''; ?>">
                <?php echo $category; ?>
            </a>
            <?php endforeach; ?>
        </div>

        <!-- Products Grid -->
        <?php if (!empty($products)): ?>
        <div class="grid grid-3">
            <?php foreach ($products as $product): ?>
            <article class="card">
                <img src="<?php echo htmlspecialchars($product->getImage()); ?>" 
                     alt="<?php echo htmlspecialchars($product->getName()); ?>" 
                     class="card-image">
                
                <div class="card-category"><?php echo htmlspecialchars($product->getCategory()); ?></div>
                
                <h3 class="card-title"><?php echo htmlspecialchars($product->getName()); ?></h3>
                
                <p class="card-description"><?php echo htmlspecialchars($product->getDescription()); ?></p>
                
                <div class="card-footer">
                    <span class="card-price"><?php echo number_format($product->getPrice(), 2); ?>€</span>
                    
                    <form method="post" action="/shop?action=add_to_cart" style="display: inline;">
                        <input type="hidden" name="product_id" value="<?php echo $product->getId(); ?>">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="btn btn-small">
                            ➕ Ajouter
                        </button>
                    </form>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="text-center" style="padding: 3rem 0;">
            <p>Aucun produit trouvé dans cette catégorie.</p>
            <a href="page=shop" class="btn">Voir tous les produits</a>
        </div>
        <?php endif; ?>
    </div>
</section>