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
            include ROOT_PATH  . '/logs/AdminLogger.php';
        } else {
            // Affichage du formulaire de connexion
            include VIEWS_PATH . '/layout/header.php';
            include VIEWS_PATH . '/admin/login.php';
            include VIEWS_PATH . '/layout/footer.php';
            include ROOT_PATH  . '/logs/AdminLogger.php'; 
        }
    }
    
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');;
            $password = trim($_POST['password'] ?? '');

            $logger = new AdminLogger();
            
            // Validation simple (en production, utiliser un hachage sécurisé)
            if ($username === ADMIN_USERNAME && password_verify($password, ADMIN_PASSWORD_HASH)) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_username'] = $username;
                $_SESSION['success_message'] = "Connexion réussie ! Bienvenue dans l'espace administrateur.";
                
                
                $logger->log($username, 'Connexion réussie ', $_SESSION['success_message']);

                header('Location: /admin');
                exit;
            } else {
                $_SESSION['error_message'] = "Nom d'utilisateur ou mot de passe incorrect.";
                $logger->log($username, 'Tentative incorrecte de connexion', $_SESSION['error_message'] );
            }
        }
        
        // Redirection vers la page admin
        header('Location: /admin');
        exit;
    }
    
    public function logout() {
        $_SESSION['success_message'] = "Déconnexion réussie.";

        $logger = new AdminLogger();
        $logger->log($_SESSION['admin_username'], 'Deconnexion', $_SESSION['success_message']);

        // Nettoyage des variables de session admin
        unset($_SESSION['admin_logged_in']);
        unset($_SESSION['admin_username']);
        
        header('Location: /home');
        exit;
    }
}
?>