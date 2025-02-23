<?php
session_start(); // Démarrer la session pour vérifier l'état de connexion
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alodo - Plateforme de Services à Domicile</title>
    <meta name="description" content="Alodo est la plateforme qui simplifie la recherche de services de qualité. Trouvez des prestataires de confiance pour tous vos besoins : plomberie, électricité, ménage, et bien plus encore.">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Montserrat:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- AOS (Animate On Scroll) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Styles personnalisés -->
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <!-- En-tête -->
    <header>
        <!-- Première ligne -->
        <div class="header-top bg-blue text-white py-2">
            <div class="container">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 gap-md-4">
                    <!-- Logo -->
                    <div class="logo">
                        <h1 class="m-0">Alodo</h1>
                    </div>
                    <!-- Partie droite : Commandes, Langue, Devise, Adresse, S'inscrire -->
                    <div class="d-flex flex-wrap align-items-center gap-2 gap-md-4">
                        <!-- Icône des commandes -->
                        <a href="#" class="text-white text-decoration-none">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <!-- Icône du globe et langue -->
                        <div class="dropdown">
                            <a href="#" class="text-white text-decoration-none dropdown-toggle" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-globe"></i> FR
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item" href="#">FR</a></li>
                                <li><a class="dropdown-item" href="#">EN</a></li>
                            </ul>
                        </div>
                        <!-- Devise -->
                        <span>XOF</span>
                        <!-- Adresse -->
                        <span>Lomé, Togo</span>
                        <!-- Bouton S'inscrire -->
                        <a href="register.php" class="btn btn-orange">S’inscrire</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deuxième ligne -->
        <div class="header-bottom bg-blue text-white py-2">
            <div class="container">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 gap-md-4">
                    <!-- Partie gauche : Catégories de services, Trouver un prestataire -->
                    <div class="d-flex flex-wrap align-items-center gap-2 gap-md-4">
                        <a href="#" class="text-white text-decoration-none">Catégories de services</a>
                        <a href="#" class="text-white text-decoration-none">Trouver un prestataire</a>
                    </div>
                    <!-- Partie droite : Accueil, Nos services, FAQ, Contact, Publier une demande -->
                    <div class="d-flex flex-wrap align-items-center gap-2 gap-md-4">
                        <a href="#" class="text-white text-decoration-none">Accueil</a>
                        <a href="#" class="text-white text-decoration-none">Nos services</a>
                        <a href="#" class="text-white text-decoration-none">FAQ</a>
                        <a href="#" class="text-white text-decoration-none">Contact</a>
                        <a href="#" class="btn btn-orange">Publier une demande</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Bannière principale -->
    <section class="hero-section bg-light py-5">
        <div class="container text-center">
            <h1 class="display-4" data-aos="fade-up">Besoin d’un coup de main ?</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Trouvez un prestataire de confiance en quelques clics !</p>
            <!-- Formulaire de recherche -->
            <form class="d-flex flex-column flex-md-row justify-content-center gap-3" data-aos="fade-up" data-aos-delay="200">
                <select class="form-select">
                    <option>Plomberie</option>
                    <option>Électricité</option>
                    <option>Ménage</option>
                    <option>Jardinage</option>
                </select>
                <input type="text" class="form-control" placeholder="Lieu (ex : Lomé)">
                <button type="submit" class="btn btn-orange">Rechercher</button>
            </form>
        </div>
    </section>

    <!-- Section Catégories de services -->
    <section class="categories-section py-5">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Catégories de services</h2>
            <div class="row">
                <!-- Exemple de catégorie -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-tools fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Plomberie</h4>
                            <p class="card-text">Réparez vos fuites et installations en un clin d'œil.</p>
                        </div>
                    </div>
                </div>
                <!-- Ajoute d'autres catégories ici -->
            </div>
        </div>
    </section>

    <!-- Section À Propos -->
    <section class="about-section py-5">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Pourquoi choisir Alodo ?</h2>
            <div class="row">
                <!-- Colonne de gauche : Présentation et étapes -->
                <div class="col-12 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <h3>🌟 La plateforme qui simplifie votre vie</h3>
                    <p>Alodo vous connecte à des prestataires de confiance pour tous vos besoins : plomberie, électricité, ménage, et bien plus encore. Simple, rapide et fiable.</p>
                    <div class="steps">
                        <div class="step mb-4">
                            <i class="fas fa-edit fa-2x mb-3" style="color: var(--orange);"></i>
                            <h4>Décrivez votre besoin</h4>
                            <p>En quelques clics, expliquez-nous ce dont vous avez besoin.</p>
                        </div>
                        <div class="step mb-4">
                            <i class="fas fa-users fa-2x mb-3" style="color: var(--orange);"></i>
                            <h4>Recevez des propositions</h4>
                            <p>Des prestataires qualifiés vous contactent avec des devis personnalisés.</p>
                        </div>
                        <div class="step mb-4">
                            <i class="fas fa-check-circle fa-2x mb-3" style="color: var(--orange);"></i>
                            <h4>Choisissez et réservez</h4>
                            <p>Sélectionnez le prestataire qui vous convient et réservez en toute confiance.</p>
                        </div>
                    </div>
                </div>
                <!-- Colonne de droite : Témoignages -->
                <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <h3>🗣️ Ce que nos clients disent</h3>
                    <div class="testimonials">
                        <div class="testimonial mb-4">
                            <p>"Grâce à Alodo, j'ai trouvé un électricien en moins d'une heure. Très professionnel et efficace !"</p>
                            <p>- Jean K.</p>
                        </div>
                        <div class="testimonial mb-4">
                            <p>"Je recommande Alodo à tous mes amis. C'est simple, rapide et fiable."</p>
                            <p>- Alice T.</p>
                        </div>
                        <div class="testimonial">
                            <p>"Une plateforme intuitive et des prestataires de qualité. Je ne vais plus ailleurs !"</p>
                            <p>- Marc D.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Services Populaires -->
    <section class="popular-services-section py-5">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Services populaires près de chez vous</h2>
            <div class="row">
                <!-- Exemple de service -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100">
                        <img src="images/plomberie.jpg" class="card-img-top" alt="Plomberie">
                        <div class="card-body">
                            <h4 class="card-title">Plomberie</h4>
                            <p class="card-text">Réparez vos fuites et installations en un clin d'œil.</p>
                        </div>
                    </div>
                </div>
                <!-- Ajoute d'autres services ici -->
            </div>
        </div>
    </section>

    <!-- Pied de page -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <h5>À propos d’Alodo</h5>
                    <p>La plateforme qui simplifie la recherche de services.</p>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <h5>Contact</h5>
                    <p>Email : contact@alodo.com</p>
                    <p>Téléphone : +228 90 12 34 56</p>
                </div>
                <div class="col-12 col-md-4">
                    <h5>Réseaux sociaux</h5>
                    <a href="#" class="text-white">Facebook</a> |
                    <a href="#" class="text-white">Twitter</a> |
                    <a href="#" class="text-white">Instagram</a>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2023 Alodo. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Scripts personnalisés -->
    <script src="js/scripts.js"></script>
</body>
</html>