<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>L'économie circulaire<br><span class="highlight">à portée de main</span></h1>
        <p>Découvrez notre sélection d'objets réutilisés, reconditionnés. 
           Ensemble, construisons un avenir plus durable.</p>
        <a href="/shop" class="btn">Découvrir la boutique</a>
    </div>
</section>

<!-- Categories Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Nos catégories</h2>
            <p>Explorez notre sélection organisée par thèmes</p>
        </div>
        
        <div class="grid grid-4">
            <?php foreach ($categories as $category): ?>
            <article class="card text-center">
                <div class="category-icon <?php echo $category['color']; ?>">
                    <?php echo $category['icon']; ?>
                </div>
                <h3 class="card-title"><?php echo $category['title']; ?></h3>
                <p class="card-description"><?php echo $category['description']; ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section values">
    <div class="container">
        <div class="section-title">
            <h2>Nos valeurs</h2>
            <p>Les 3R de l'économie circulaire au cœur de notre mission</p>
        </div>
        
        <div class="grid grid-3">
            <?php foreach ($values as $value): ?>
            <article class="value-item">
                <div class="value-icon">
                    <?php echo $value['icon']; ?>
                </div>
                <h3><?php echo $value['title']; ?></h3>
                <p><?php echo $value['description']; ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <h2>Rejoignez le mouvement</h2>
        <p>Chaque achat contribue à réduire les déchets et soutient l'économie locale</p>
        <a href="/shop" class="btn btn-secondary">Commencer maintenant</a>
    </div>
</section>