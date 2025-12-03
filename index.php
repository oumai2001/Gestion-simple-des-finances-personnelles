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

    <!-- Hero Section -->
    <section class="hero" id="accueil">
        <div class="hero-container">
            <div class="hero-content">
                <h1>
                    Prenez le contrôle de vos 
                    <span class="highlight">finances</span>
                </h1>
                <p>
                    Suivez vos revenus et dépenses en temps réel. Analysez vos habitudes financières et atteignez vos objectifs avec MyBudget.
                </p>
                <div class="hero-buttons">
                    <a href="signup.php" class="btn-large btn-gradient">
                        Commencer gratuitement
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="fonctionnalites.php" class="btn-large btn-outline">
                        Découvrir
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="dashboard-preview">
                    <div class="preview-header">
                        <div class="preview-dot"></div>
                        <div class="preview-dot"></div>
                        <div class="preview-dot"></div>
                    </div>
                    <div class="stat-cards">
                        <div class="stat-card">
                            <div class="stat-label">Revenus</div>
                            <div class="stat-value">12,450 DH</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-label">Dépenses</div>
                            <div class="stat-value">8,230 DH</div>
                        </div>
                    </div>
                    <div class="chart-placeholder">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="fonctionnalites">
        <div class="section-header">
            <h2>Tout ce dont vous avez besoin</h2>
            <p>Des outils puissants pour gérer votre budget efficacement</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Suivi en temps réel</h3>
                <p>Visualisez vos revenus et dépenses instantanément avec des graphiques intuitifs et des statistiques détaillées.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tags"></i>
                </div>
                <h3>Catégories personnalisées</h3>
                <p>Organisez vos transactions par catégories pour mieux comprendre où va votre argent.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <h3>Alertes intelligentes</h3>
                <p>Recevez des notifications pour rester informé de votre situation financière en permanence.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-file-export"></i>
                </div>
                <h3>Export de données</h3>
                <p>Exportez vos rapports en PDF ou CSV pour une analyse approfondie ou votre comptabilité.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Multi-plateformes</h3>
                <p>Accédez à vos finances depuis n'importe quel appareil, où que vous soyez.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Sécurité maximale</h3>
                <p>Vos données sont cryptées et sécurisées avec les dernières technologies de protection.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <h2>Prêt à transformer votre gestion financière ?</h2>
        <p>Rejoignez des milliers d'utilisateurs qui ont déjà pris le contrôle de leur budget</p>
        <a href="signup.php" class="btn-white">Créer mon compte gratuit</a>
    </section>

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