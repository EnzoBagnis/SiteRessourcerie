<section class="section">
    <div class="container">
        <div class="admin-form">
            <!-- Header -->
            <div class="text-center">
                <div class="admin-icon">👤</div>
                <h1>Espace Administrateur</h1>
                <p>Connectez-vous pour accéder à l'administration</p>
            </div>

            <!-- Login Form -->
            <form method="post" action="?page=admin&action=login">
                <!-- Username Field -->
                <div class="form-group">
                    <label for="username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" 
                           id="username" 
                           name="username" 
                           class="form-input" 
                           required 
                           autocomplete="username"
                           placeholder="Entrez votre nom d'utilisateur">
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" 
                           id="password" 
                           name="password" 
                           class="form-input" 
                           required 
                           autocomplete="current-password"
                           placeholder="Entrez votre mot de passe">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn" style="width: 100%;">
                    Se connecter
                </button>
            </form>

            <!-- Demo Credentials Info -->
            <div class="demo-credentials">
                <h4>Identifiants de démonstration :</h4>
                <p><strong>Utilisateur :</strong> admin<br>
                   <strong>Mot de passe :</strong> password123</p>
            </div>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-2">
            <a href="?page=home" style="color: var(--primary-color); text-decoration: none;">
                ← Retour à l'accueil
            </a>
        </div>
    </div>
</section>