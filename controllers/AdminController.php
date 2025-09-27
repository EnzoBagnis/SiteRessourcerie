<?php
/**
 * Contrôleur pour l'administration
 */

class AdminController {
    
    public function index() {
        $pageTitle = "Administration - " . SITE_NAME;
        $pageDescription = "Espace d'administration";
        
        // Vérification si l'utilisateur est connecté
        if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
            // Affichage du tableau de bord admin
            include VIEWS_PATH . '/layout/header.php';
            include VIEWS_PATH . '/admin/dashboard.php';
            include VIEWS_PATH . '/layout/footer.php';
        } else {
            // Affichage du formulaire de connexion
            include VIEWS_PATH . '/layout/header.php';
            include VIEWS_PATH . '/admin/login.php';
            include VIEWS_PATH . '/layout/footer.php';
        }
    }
    
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');;
            $password = trim($_POST['password'] ?? '');

            
            // Validation simple (en production, utiliser un hachage sécurisé)
            if ($username === ADMIN_USERNAME && password_verify($password, ADMIN_PASSWORD_HASH)) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_username'] = $username;
                $_SESSION['success_message'] = "Connexion réussie ! Bienvenue dans l'espace administrateur.";
                
                header('Location: ?page=admin');
                exit;
            } else {
                $_SESSION['error_message'] = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        }
        
        // Redirection vers la page admin
        header('Location: ?page=admin');
        exit;
    }
    
    public function logout() {
        // Nettoyage des variables de session admin
        unset($_SESSION['admin_logged_in']);
        unset($_SESSION['admin_username']);
        
        $_SESSION['success_message'] = "Déconnexion réussie.";
        
        header('Location: ?page=home');
        exit;
    }
}
?>