    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Coordonnées -->
                <div class="footer-section">
                    <h3>Nous contacter</h3>
                    <p>📍 123 Rue de l'Économie Circulaire<br>75000 Paris</p>
                    <p>📞 01 23 45 67 89</p>
                    <p>✉️ contact@Les-trésors-de-Vitrolles.fr</p>
                </div>

                <!-- Horaires -->
                <div class="footer-section">
                    <h3>Horaires d'ouverture</h3>
                    <ul>
                        <li>Lundi - Vendredi : 9h - 18h</li>
                        <li>Samedi : 9h - 17h</li>
                        <li>Dimanche : Fermé</li>
                    </ul>
                </div>

                <!-- Nos valeurs -->
                <div class="footer-section">
                    <h3>Nos valeurs</h3>
                    <ul>
                        <li>• Réduire les déchets</li>
                        <li>• Réutiliser les objets</li>
                        <li>• Recycler les matériaux</li>
                        <li>• Soutenir l'économie locale</li>
                    </ul>
                </div>

                <!-- Réseaux sociaux -->
                <div class="footer-section">
                    <h3>Suivez-nous</h3>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">📘</a>
                        <a href="#" class="social-link" aria-label="Instagram">📷</a>
                        <a href="#" class="social-link" aria-label="Twitter">🐦</a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Les trouvailles de Vitrolles. Tous droits réservés.</p>
                <div>
                    <a href="#">Mentions légales</a> |
                    <a href="#">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript optionnel pour les interactions -->
    <script>
        // Simple JavaScript pour améliorer l'expérience utilisateur
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-hide messages after 5 seconds
            const messages = document.querySelectorAll('.message');
            messages.forEach(function(message) {
                setTimeout(function() {
                    message.style.opacity = '0';
                    setTimeout(function() {
                        message.style.display = 'none';
                    }, 300);
                }, 5000);
            });

            // Smooth scroll for anchor links
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            anchorLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>