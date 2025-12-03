<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - MyBudget</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="index.html" class="logo">MyBudget</a>
            <ul class="nav-links">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="fonctionnalites.php">Fonctionnalités</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php" class="btn-primary">Connexion</a></li>
            </ul>
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
                    <li><a href="index.html#accueil">Accueil</a></li>
                    <li><a href="index.html#fonctionnalites">Fonctionnalités</a></li>
                    <li><a href="#">Tarifs</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Support</h3>
                <ul>
                    <li><a href="#">Centre d'aide</a></li>
                    <li><a href="#">Contactez-nous</a></li>
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
        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleIcon = fieldId === 'password' ? document.getElementById('toggleIcon1') : document.getElementById('toggleIcon2');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthBar = document.getElementById('strengthBar');
            const strengthContainer = document.getElementById('passwordStrength');
            
            if (password.length > 0) {
                strengthContainer.style.display = 'block';
            } else {
                strengthContainer.style.display = 'none';
                return;
            }

            // Remove previous classes
            strengthBar.className = 'password-strength-bar';
            
            let strength = 0;
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/\d/)) strength++;
            if (password.match(/[^a-zA-Z\d]/)) strength++;

            if (strength <= 2) {
                strengthBar.classList.add('strength-weak');
            } else if (strength === 3) {
                strengthBar.classList.add('strength-medium');
            } else {
                strengthBar.classList.add('strength-strong');
            }
        }

        // Form validation
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            let isValid = true;
            
            // Email validation
            const email = document.getElementById('email');
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!emailRegex.test(email.value)) {
                email.classList.add('input-error');
                emailError.style.display = 'block';
                isValid = false;
            } else {
                email.classList.remove('input-error');
                emailError.style.display = 'none';
            }

            // Password validation
            const password = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
            
            if (password.value.length < 8) {
                password.classList.add('input-error');
                passwordError.style.display = 'block';
                isValid = false;
            } else {
                password.classList.remove('input-error');
                passwordError.style.display = 'none';
            }

            // Confirm password validation
            const confirmPassword = document.getElementById('confirm_password');
            const confirmError = document.getElementById('confirmError');
            
            if (password.value !== confirmPassword.value) {
                confirmPassword.classList.add('input-error');
                confirmError.style.display = 'block';
                isValid = false;
            } else {
                confirmPassword.classList.remove('input-error');
                confirmError.style.display = 'none';
            }

            if (!isValid) {
                e.preventDefault();
            }
        });

        // Header scroll effect
        const header = document.querySelector('header');
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                header.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.05)';
            }
        });
    </script>
</body>
</html>