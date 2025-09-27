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

                <div>
                    <div id="ecoindex-badge"></div>
                    <script src="https://cdn.jsdelivr.net/gh/cnumr/ecoindex_badge@3/assets/js/ecoindex-badge.js" defer></script>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Les Trésors de Vitrolles. Tous droits réservés.</p>
                <div>
                    <a href="#">Mentions légales</a> |
                    <a href="#">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript optionnel pour les interactions -->
    <script>
        document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll(".message").forEach((function(e){setTimeout((function(){e.style.opacity="0",setTimeout((function(){e.style.display="none"}),300)}),5e3)}));document.querySelectorAll('a[href^="#"]').forEach((function(e){e.addEventListener("click",(function(e){e.preventDefault();const t=document.querySelector(this.getAttribute("href"));t&&t.scrollIntoView({behavior:"smooth"})}))}))}));
    </script>
</body>
</html>