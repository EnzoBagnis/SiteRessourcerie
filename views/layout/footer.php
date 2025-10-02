    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Coordonnées -->
                <div class="footer-section">
                    <h3>Nous contacter</h3>
                    <p>📍 Zone des Estroublans<br>13127 Vitrolles</p>
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

                <div>
                    <div id="ecoindex-badge"></div>
                    <script nonce="<?= $_SESSION['nonce'] ?>" src="https://cdn.jsdelivr.net/gh/cnumr/ecoindex_badge@3/assets/js/ecoindex-badge.js" integrity="sha384-uzG8a1AszF3mbui4HxpNQ/1DwW4XQAEhj/C4lTmS2zTDrnz2bIDxG00A6rf7e62S" crossorigin="anonymous" defer></script>
                    <div id="wcb" class="carbonbadge"></div>
                    <script nonce="<?= $_SESSION['nonce'] ?>" src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" integrity="sha384-5Sivu2UajgUNg6Sxu3UHsZKjZlq9v6/slTAhA0/s21XcfNcrkSZRRO9K/0Cg14iP" crossorigin="anonymous" defer></script>
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
    <script nonce="<?= $_SESSION['nonce'] ?>">
        document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll(".message").forEach((function(e){setTimeout((function(){e.style.opacity="0",setTimeout((function(){e.style.display="none"}),300)}),5e3)}));document.querySelectorAll('a[href^="#"]').forEach((function(e){e.addEventListener("click",(function(e){e.preventDefault();const t=document.querySelector(this.getAttribute("href"));t&&t.scrollIntoView({behavior:"smooth"})}))}))}));
    </script>
</body>
</html>
