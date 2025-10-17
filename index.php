<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Origine BK</title>
    <link rel="stylesheet" href="Dossier_CSS/styles.css">
    <script src="Dossier_JS/script.js"></script>
</head>
<body>
    <!-- Page d'accueil -->
    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <!-- Liens de navigation vers les sections de la page -->
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#a-propos">À propos</a></li>
                <li><a href="#galerie">Galerie</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
     <!-- Contenu principal de la page -->
    <main>
         <!-- Section Hero avec vidéo en arrière-plan -->
        <section  id="accueil" class="hero">
            <video autoplay muted loop id="background-video">
                <source src="Dossier_images/video3.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="hero-content">
                <h1>Cuisine française de saison, ancrée dans ses origines</h1>
                <p>Une expérience culinaire authentique au cœur de la tradition française</p>
                <div class="buttons">
                    <!-- Boutons pour découvrir le menu et réserver une table -->
                    <button class="menu-btn" id="discoverMenuBtn">Découvrir notre menu</button>
                    <button class="reserver-table-btn" id="reserveTableBtn">Réserver une table</button>
                </div>
            </div>
        </section>

    </main>

    <!-- Section Menu -->
<section id="menu" class="menu-section">
    <h1 class="menu-title">Notre Menu</h1>
    <p class="menu-subtitle">Des produits frais et de saison, cuisinés avec passion</p>
    <div class="menu-grid">
          <!-- Chaque carte de menu est un formulaire qui envoie les données vers un fichier PHP -->
           <!-- Carte 1 -->
            <form action="Dossier_PHP/panier1.php" method="POST" class="menu-card-form">
                  <div class="menu-card" style="background-image: url('Dossier_images/image3.jpg');" onclick="this.closest('form').submit();">
                    <button type="submit" class="add-button">ADD</button>
                    <div class="menu-card-info">
                        <h3>Kebab Frites Boisson</h3>
                        <p class="price">12,5€</p>
                    </div>
                    <input type="hidden" name="item" value="Kebab Frites Boisson">
                </div>
            </form>

            <!-- Carte 2 -->
            <form action="Dossier_PHP/panier2.php" method="POST" class="menu-card-form">
                    <div class="menu-card" style="background-image: url('Dossier_images/image3.jpg');" onclick="this.closest('form').submit();">
                    <button type="submit" class="add-button">ADD</button>
                    <div class="menu-card-info">
                        <h3>Kebab Frites</h3>
                        <p class="price">11€</p>
                    </div>
                    <input type="hidden" name="item" value="Kebab Frites">
                </div>
            </form>

            <!-- Carte 3 -->
            <form action="Dossier_PHP/panier3.php" method="POST" class="menu-card-form">
                    <div class="menu-card" style="background-image: url('Dossier_images/image3.jpg');" onclick="this.closest('form').submit();">
                    <button type="submit" class="add-button">ADD</button>
                    <div class="menu-card-info">
                        <h3>Kebab Boisson</h3>
                        <p class="price">11€</p>
                    </div>
                    <input type="hidden" name="item" value="Kebab Boisson">
                </div>
            </form>

            <!-- Carte 4 -->
            <form action="Dossier_PHP/panier4.php" method="POST" class="menu-card-form">
                    <div class="menu-card" style="background-image: url('Dossier_images/image3.jpg');" onclick="this.closest('form').submit();">
                    <button type="submit" class="add-button">ADD</button>
                    <div class="menu-card-info">
                        <h3>Kebab</h3>
                        <p class="price">9€</p>
                    </div>
                    <input type="hidden" name="item" value="Kebab">
                </div>
            </form>

            <!-- Carte 5 -->
            <form action="Dossier_PHP/panier5.php" method="POST" class="menu-card-form">
                    <div class="menu-card" style="background-image: url('Dossier_images/image3.jpg');" onclick="this.closest('form').submit();">
                    <button type="submit" class="add-button">ADD</button>
                    <div class="menu-card-info">
                        <h3>Frites</h3>
                        <p class="price">3€</p>
                    </div>
                    <input type="hidden" name="item" value="Frites">
                </div>
            </form>

            <!-- Carte 6 -->
            <form action="Dossier_PHP/panier6.php" method="POST" class="menu-card-form">
                    <div class="menu-card" style="background-image: url('Dossier_images/image3.jpg');" onclick="this.closest('form').submit();">
                    <button type="submit" class="add-button">ADD</button>
                    <div class="menu-card-info">
                        <h3>Boissons</h3>
                        <p class="price">2,5€</p>
                    </div>
                    <input type="hidden" name="item" value="Boissons">
                </div>
            </form>
        </div>
</section>

    <!-- Section de Réservation -->
<div id="reservation" class="reservation-container">
    <header class="reservation-header">
        <h1>Réservation</h1>
        <p>Réservez votre table pour une expérience gastronomique inoubliable</p>
    </header>
       <!-- Formulaire de réservation -->
    <form class="reservation-form" action="reservation.php" method="POST">
        <div class="form-group">
            <label for="full_name">Nom complet</label>
            <input type="text" id="full_name" name="full_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>
        </div>
        <div class="form-group">
            <label for="time">Heure</label>
            <input type="time" id="time" name="time" required>
        </div>
        <div class="form-group">
            <label for="guests">Nombre de personnes</label>
            <select id="guests" name="guests" required>
                <option value="1">1 personne</option>
                <option value="2">2 personnes</option>
                <option value="3">3 personnes</option>
                <option value="4">4 personnes et plus </option>
            </select>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group" style="grid-column: span 2;">
            <label for="special_requests">Demandes spéciales (optionnel)</label>
            <textarea id="special_requests" name="special_requests"></textarea>
        </div>
        <input type="hidden" name="from_index" value="1">
        <button type="submit" class="confirm-btn">Confirmer la réservation</button>
    </form>
    
</div>

     <!-- Section À propos -->
    <section id="a-propos" class="about-container">
        <div class="about-header">
            <h1>À propos d'Origine</h1>
            <h1>BK</h1>
            <div class="red-line"></div>
        </div>
        <div class="about-content">
            <p>Fondé en 2018, Origine BK est né d'une <br>
                passion pour la cuisine française <br>
                authentique et d'un profond respect pour <br>
                les produits de saison.</p>
            <p>Notre philosophie est simple : proposer <br>
               une cuisine qui honore ses origines tout <br>
               en apportant une touche de modernité. Chaque <br> 
               plat raconte une histoire, celle de nos terroirs <br>
               et de notre patrimoine culinaire.</p>
            <p>Nous travaillons exclusivement avec des <br>
               producteurs locaux qui partagent nos valeurs.</p>
        </div>
        <div class="since-badge">
            <p>DEPUIS</p>
            <p>2018</p>
        </div>
    </section>

     <!-- Section Galerie -->
    <section id="galerie" class="gallery-container">
        <h1 class="gallery-title">Notre Galerie</h1>
        <p class="gallery-subtitle">Découvrez l'ambiance et les créations d'Origine BK</p>
        <div class="gallery-grid">
            <!-- Exemple d'image -->
            <div class="gallery-item">
                <img src="Dossier_images/image2.jpg" alt="Plat signature">
                <p>Degustez</p>
            </div>
            <!-- Exemple d'image -->
            <div class="gallery-item">
                <img src="Dossier_images/image3.jpg" alt="Salle du restaurant">
                <p>Galette ou Pain</p>
            </div>
            <!-- Exemple d'image -->
            <div class="gallery-item">
                <img src="Dossier_images/image4.jpg" alt="Salle du restaurant">
                <p>Kebab fait maison</p>
            </div>

           <div class="gallery-item">
                <img src="Dossier_images/image5.jpg" alt="Plat signature">
                <p>Legumes</p>
            </div>

            <!-- Exemple d'image -->
            <div class="gallery-item">
                <img src="Dossier_images/image6.jpg" alt="Salle du restaurant">
                <p>Veau</p>
            </div>
            <!-- Exemple d'image -->
            <div class="gallery-item">
                <img src="Dossier_images/image7.jpg" alt="Salle du restaurant">
                <p>Charbon de bois</p>
            </div>

        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="contact-section">
        <h1 class="contact-title">Contact</h1>
        <p class="contact-subtitle">Nous sommes à votre disposition pour toute information</p>

        <div class="contact-container">
            <div class="contact-info">
                <h2>Adresse</h2>
                <p>19 Rue du Mirail</p>
                <p>33000 Bordeaux, France</p>

                <h2>Horaires d'ouverture</h2>
                <p><strong>Ouvert 7j/7</strong></p>
                <p><strong>Lundi - Dimanche</strong> : 12h00 - 23h30</p>
                <h2>Contact</h2>
                <p>+33 9 79 14 48 70</p>
                <p>contact@originebk.fr</p>

                <h2>Suivez-nous</h2>
                <div class="social-icons">
                    <a href="https://www.facebook.com/share/1BCZGDUjrH/?mibextid=wwXIfr"><img src="Dossier_images/facebook.png" alt="Facebook"></a>
                    <a href="https://www.instagram.com/origine_bk/?utm_source=ig_embed"><img src="Dossier_images/insta.jpeg" alt="Instagram"></a>
                </div>
            </div>

            <div class="contact-map">
                <!-- Intégrez ici une carte Google Maps ou une image de carte -->
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.3787345683345!2d-0.5739111242762905!3d44.83421987525191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527654d4abb45%3A0xd5fba47922f7aa99!2sOrigine%20BK%20-%20Berliner%20kebab!5e0!3m2!1sfr!2sfr!4v1752239201185!5m2!1sfr!2sfr" referrerpolicy="no-referrer-when-downgrade">
               </iframe>
            </div>

            <div class="contact-form">
                <h2>Envoyez-nous un message</h2>
                <form method="post" action="message.php">
                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="Sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet" required>
                    </div>
                    <div class="form-group">
                        <label for="Message">Message</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Pied de page -->
   <footer class="footer">
    <div class="footer-logo">
        <img src="Dossier_images/Berliner.png" alt="Origine BK Logo">
        <p>© 2023 Origine BK. Tous droits réservés.</p>
    </div>

    <div class="footer-location">
        <h4>📍 Notre adresse</h4>
        <p>42 Rue de la Gastronomie, 75001 Paris, France</p>
    </div>

    <div class="footer-links">
        <a href="#">Mentions légales</a>
        <a href="#">Politique de confidentialité</a>
    </div>
  </footer>

</body>
</html>
