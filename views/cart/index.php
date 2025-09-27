<section class="section">
    <div class="container">
        <!-- Header -->
        <div class="section-title">
            <h1>Mon panier</h1>
            <?php if (!Cart::isEmpty()): ?>
            <p><?php echo Cart::getUniqueItemsCount(); ?> article<?php echo Cart::getUniqueItemsCount() > 1 ? 's' : ''; ?> dans votre panier</p>
            <?php endif; ?>
        </div>

        <?php if (Cart::isEmpty()): ?>
        <!-- Empty Cart -->
        <div class="text-center" style="padding: 4rem 0;">
            <div style="font-size: 4rem; margin-bottom: 1rem;">🛒</div>
            <h2>Votre panier est vide</h2>
            <p style="margin-bottom: 2rem;">Découvrez notre sélection de produits reconditionnés</p>
            <a href="?page=shop" class="btn">Continuer mes achats</a>
        </div>
        <?php else: ?>
        <!-- Cart Content -->
        <div class="grid grid-2" style="align-items: start;">
            <!-- Cart Items -->
            <div>
                <?php foreach ($cartItems as $productId => $item): ?>
                <div class="cart-item">
                    <img src="<?php echo htmlspecialchars($item['product']['image']); ?>" 
                         alt="<?php echo htmlspecialchars($item['product']['name']); ?>" 
                         class="cart-item-image">
                    
                    <div class="cart-item-details">
                        <h3><?php echo htmlspecialchars($item['product']['name']); ?></h3>
                        <p class="card-description"><?php echo htmlspecialchars($item['product']['description']); ?></p>
                        <span class="card-category"><?php echo htmlspecialchars($item['product']['category']); ?></span>
                    </div>
                    
                    <div class="cart-item-controls">
                        <!-- Quantity Controls -->
                        <div class="quantity-controls">
                            <form method="post" action=" ?page=cart&action=update" style="display: inline;">
                                <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                                <input type="hidden" name="quantity" value="<?php echo $item['quantity'] - 1; ?>">
                                <button type="submit" class="quantity-btn">➖</button>
                            </form>
                            
                            <span style="min-width: 30px; text-align: center;"><?php echo $item['quantity']; ?></span>
                            
                            <form method="post" action=" ?page=cart&action=update" style="display: inline;">
                                <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                                <input type="hidden" name="quantity" value="<?php echo $item['quantity'] + 1; ?>">
                                <button type="submit" class="quantity-btn">➕</button>
                            </form>
                        </div>
                        
                        <!-- Price -->
                        <div class="text-right">
                            <div class="card-price"><?php echo number_format($item['product']['price'] * $item['quantity'], 2); ?>€</div>
                            <small><?php echo number_format($item['product']['price'], 2); ?>€ l'unité</small>
                        </div>
                        
                        <!-- Remove Button -->
                        <form method="post" action=" ?page=cart&action=remove" style="display: inline;">
                            <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
                            <button type="submit" class="quantity-btn" style="color: #e74c3c;" 
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                🗑️
                            </button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Order Summary -->
            <div class="card" style="position: sticky; top: 2rem;">
                <h2>Récapitulatif</h2>
                
                <div style="margin: 1.5rem 0;">
                    <?php foreach ($cartItems as $item): ?>
                    <div class="flex justify-between" style="margin-bottom: 0.5rem; font-size: 0.875rem;">
                        <span><?php echo htmlspecialchars($item['product']['name']); ?> × <?php echo $item['quantity']; ?></span>
                        <span><?php echo number_format($item['product']['price'] * $item['quantity'], 2); ?>€</span>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div style="border-top: 1px solid var(--border-color); padding-top: 1rem; margin-bottom: 1.5rem;">
                    <div class="flex justify-between">
                        <strong>Total</strong>
                        <strong style="font-size: 1.25rem;"><?php echo number_format($totalPrice, 2); ?>€</strong>
                    </div>
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <button class="btn" style="width: 100%;">Passer commande</button>
                    
                    <a href="?page=shop" class="btn btn-secondary" style="width: 100%; text-align: center;">
                        Continuer mes achats
                    </a>
                    
                    <form method="post" action="?page=cart&action=clear" style="margin-top: 0.5rem;">
                        <button type="submit" 
                                style="background: none; border: none; color: #e74c3c; cursor: pointer; font-size: 0.875rem; width: 100%;"
                                onclick="return confirm('Êtes-vous sûr de vouloir vider le panier ?')">
                            Vider le panier
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>