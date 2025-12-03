<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBudget - Gestion Financière Simplifiée</title>
        <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">MyBudget</div>
            <ul class="nav-links">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="fonctionnalites.php">Fonctionnalités</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php" class="btn-primary">Connexion</a></li>
            </ul>
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>MyBudget</h3>
                <p>Votre partenaire pour une gestion financière intelligente et simplifiée.</p>
            </div>
            <div class="footer-section">
                <h3>Liens rapides</h3>
                <ul>
                    <li><a href="accueil.php">Accueil</a></li>
                    <li><a href="fonctionnalites.php">Fonctionnalités</a></li>
                    <li><a href="#">Tarifs</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Support</h3>
                <ul>
                    <li><a href="#">Centre d'aide</a></li>
                    <li><a href="contact.php">Contactez-nous</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Documentation</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Légal</h3>
                <ul>
                    <li><a href="#">Conditions d'utilisation</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">Mentions légales</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 MyBudget. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        let lastScroll = 0;
        const header = document.querySelector('header');
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                header.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.05)';
            }
            
            lastScroll = currentScroll;
        });
    </script>
</body>
</html>