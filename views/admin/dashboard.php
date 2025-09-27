<section class="section">
    <div class="container">
        <!-- Header -->
        <div class="section-title">
            <h1>Tableau de bord administrateur</h1>
            <p>Bienvenue, <?php echo htmlspecialchars($_SESSION['admin_username']); ?> !</p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-4 mb-3">
            <div class="card text-center">
                <div class="value-icon">📦</div>
                <h3><?php echo count(Product::getAll()); ?></h3>
                <p>Produits en stock</p>
            </div>
            
            <div class="card text-center">
                <div class="value-icon">🛒</div>
                <h3><?php echo Cart::getTotalItems(); ?></h3>
                <p>Articles dans les paniers</p>
            </div>
            
            <div class="card text-center">
                <div class="value-icon">🏷️</div>
                <h3><?php echo count(Product::getCategories()) - 1; ?></h3>
                <p>Catégories</p>
            </div>
            
            <div class="card text-center">
                <div class="value-icon">💰</div>
                <h3><?php echo number_format(Cart::getTotalPrice(), 2); ?>€</h3>
                <p>Valeur des paniers</p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-2">
            <!-- Products Management -->
            <div class="card">
                <h2>Gestion des produits</h2>
                <p>Administrez votre catalogue de produits reconditionnés.</p>
                <div style="margin-top: 1rem;">
                    <button class="btn btn-small" style="margin-right: 0.5rem;">Ajouter un produit</button>
                    <button class="btn btn-small btn-secondary">Modifier le stock</button>
                </div>
            </div>

            <!-- Orders Management -->
            <div class="card">
                <h2>Gestion des commandes</h2>
                <p>Suivez et gérez les commandes de vos clients.</p>
                <div style="margin-top: 1rem;">
                    <button class="btn btn-small" style="margin-right: 0.5rem;">Voir les commandes</button>
                    <button class="btn btn-small btn-secondary">Historique</button>
                </div>
            </div>

            <!-- Categories Management -->
            <div class="card">
                <h2>Gestion des catégories</h2>
                <p>Organisez vos produits par catégories thématiques.</p>
                <div style="margin-top: 1rem;">
                    <button class="btn btn-small" style="margin-right: 0.5rem;">Gérer les catégories</button>
                    <button class="btn btn-small btn-secondary">Statistiques</button>
                </div>
            </div>

            <!-- Settings -->
            <div class="card">
                <h2>Paramètres</h2>
                <p>Configurez votre ressourcerie et vos préférences.</p>
                <div style="margin-top: 1rem;">
                    <button class="btn btn-small" style="margin-right: 0.5rem;">Paramètres généraux</button>
                    <form method="post" action="?page=admin&action=logout" style="display: inline;">
                        <button type="submit" class="btn btn-small" style="background: #e74c3c;">
                            Se déconnecter
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card mt-2">
            <h2>Activité récente</h2>
            <div style="margin-top: 1rem;">
                <div style="padding: 0.75rem; background: var(--bg-light); border-radius: var(--border-radius); margin-bottom: 0.5rem;">
                    <strong>Aujourd'hui :</strong> Nouvelle connexion administrateur
                </div>
                <div style="padding: 0.75rem; background: var(--bg-light); border-radius: var(--border-radius); margin-bottom: 0.5rem;">
                    <strong>Hier :</strong> Mise à jour du catalogue produits
                </div>
                <div style="padding: 0.75rem; background: var(--bg-light); border-radius: var(--border-radius);">
                    <strong>Cette semaine :</strong> Ajout de 3 nouveaux produits
                </div>
            </div>
        </div>

        <!-- Quick Tips -->
        <div class="card mt-2" style="background: rgba(26, 188, 156, 0.1);">
            <h2>💡 Conseils éco-responsables</h2>
            <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                <li>Privilégiez les produits locaux pour réduire l'empreinte carbone</li>
                <li>Mettez en avant l'histoire de chaque objet reconditionné</li>
                <li>Proposez des ateliers de réparation pour sensibiliser vos clients</li>
                <li>Utilisez des emballages recyclés ou réutilisables</li>
            </ul>
        </div>
    </div>
</section>