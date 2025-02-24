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
                    <option>Achats</option>
                    <option>Aide à domicile</option>
                    <option>Babyssiting</option>
                    <option>Blanchissage</option>
                    <option>Courses</option>
                    <option>Cuisine</option>
                    <option>Électricité</option>
                    <option>Jardinage</option>
                    <option>Maçonnerie</option>
                    <option>Ménage</option>
                    <option>Menuiserie</option> 
                    <option>Plomberie</option>                   
                    <option>--- Autres ---</option>                   
                </select>
                <input type="text" class="form-control" placeholder="Lieu (ex : Lomé)">
                <button type="submit" class="btn btn-orange">Rechercher</button>
            </form>
        </div>
    </section>

    <!-- Section Pourquoi Choisir Alodo ? -->
    <section class="why-choose-section py-5">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Pourquoi Choisir Alodo ?</h2>
            <div class="row">
                <!-- Card 1 : Des millions d’offres -->
                <div class="col-12 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="#categories" class="card text-center h-100 text-decoration-none">
                        <div class="card-body">
                            <i class="fas fa-boxes fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Des centaines d’offres</h4>
                            <p class="card-text">Explorez une vaste sélection de services dans des centaines de catégories. Trouvez exactement ce dont vous avez besoin, quand vous en avez besoin.</p>
                        </div>
                    </a>
                </div>
                <!-- Card 2 : Qualité et transactions garanties -->
                <div class="col-12 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="#qualite" class="card text-center h-100 text-decoration-none">
                        <div class="card-body">
                            <i class="fas fa-shield-alt fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Qualité garantie</h4>
                            <p class="card-text">Nous vérifions chaque prestataire pour vous offrir des services de qualité. Profitez de transactions sécurisées et d'une tranquillité d'esprit totale.</p>
                        </div>
                    </a>
                </div>
                <!-- Card 3 : Une solution à guichet unique -->
                <div class="col-12 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#guichet-unique" class="card text-center h-100 text-decoration-none">
                        <div class="card-body">
                            <i class="fas fa-tasks fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Solution complète</h4>
                            <p class="card-text">De la recherche de prestataires à la gestion des commandes, tout est simplifié en un seul endroit. Gagnez du temps et de l'énergie.</p>
                        </div>
                    </a>
                </div>
                <!-- Card 4 : Une expérience sur mesure -->
                <div class="col-12 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <a href="#sur-mesure" class="card text-center h-100 text-decoration-none">
                        <div class="card-body">
                            <i class="fas fa-user-cog fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Expérience sur mesure</h4>
                            <p class="card-text">Bénéficiez de services adaptés à vos besoins, avec des réductions exclusives et une assistance personnalisée à chaque étape.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Catégories de services -->
    <section class="categories-section py-5" id="categories">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Catégories de services</h2>
            <div class="row">
            <p>Découvrez une multitude de services dans des dizaines de catégories. Que vous ayez besoin d'un plombier, d'un électricien ou d'un service de ménage, Alodo a ce qu'il vous faut.</p>
                <!-- Achats -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-shopping-cart fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Achats</h4>
                            <p class="card-text">Faites vos courses sans vous déplacer, nous nous en occupons.</p>
                        </div>
                    </div>
                </div>
                <!-- Aide à domicile -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-hands-helping fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Aide à domicile</h4>
                            <p class="card-text">Un accompagnement personnalisé pour votre quotidien.</p>
                        </div>
                    </div>
                </div>
                <!-- Babysitting -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-baby fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Babysitting</h4>
                            <p class="card-text">Des professionnels qualifiés pour veiller sur vos enfants.</p>
                        </div>
                    </div>
                </div>
                <!-- Blanchissage -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-tshirt fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Blanchissage</h4>
                            <p class="card-text">Vos vêtements nettoyés et repassés avec soin.</p>
                        </div>
                    </div>
                </div>
                <!-- Courses -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-car fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Courses</h4>
                            <p class="card-text">Des courses livrées rapidement, sans stress.</p>
                        </div>
                    </div>
                </div>
                <!-- Cuisine -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-utensils fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Cuisine</h4>
                            <p class="card-text">Un chef à domicile pour des repas savoureux.</p>
                        </div>
                    </div>
                </div>
                <!-- Électricité -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-bolt fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Électricité</h4>
                            <p class="card-text">Des experts pour tous vos travaux électriques.</p>
                        </div>
                    </div>
                </div>
                <!-- Jardinage -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-seedling fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Jardinage</h4>
                            <p class="card-text">Prenez soin de votre espace vert avec nos jardiniers.</p>
                        </div>
                    </div>
                </div>
                <!-- Maçonnerie -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-tools fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Maçonnerie</h4>
                            <p class="card-text">Des maçons qualifiés pour vos constructions et rénovations.</p>
                        </div>
                    </div>
                </div>
                <!-- Ménage -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="900">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-broom fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Ménage</h4>
                            <p class="card-text">Un intérieur impeccable sans effort.</p>
                        </div>
                    </div>
                </div>
                <!-- Menuiserie -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="1000">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-hammer fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Menuiserie</h4>
                            <p class="card-text">Des meubles et aménagements sur mesure.</p>
                        </div>
                    </div>
                </div>
                <!-- Plomberie -->
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="1100">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <i class="fas fa-faucet fa-3x mb-3" style="color: var(--orange);"></i>
                            <h4 class="card-title">Plomberie</h4>
                            <p class="card-text">Réparez vos fuites et installations en un clin d'œil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Qualité et Professionnalisme -->
    <section id="qualite" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Qualité et Professionnalisme</h2>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="lead" style="font-family: 'Roboto', sans-serif; color: #333333;">
                        Chez Alodo, nous vérifions chaque prestataire pour vous offrir des services de qualité. Nos partenaires sont des professionnels expérimentés, fiables et compétents.
                    </p>
                    <div class="row mt-5">
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-check-circle fa-3x mb-3" style="color: #50C878;"></i>
                                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Vérification Rigoureuse</h4>
                                    <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #555555;">
                                        Chaque prestataire est soigneusement sélectionné et vérifié pour garantir la qualité.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-star fa-3x mb-3" style="color: #FF8C00;"></i>
                                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Professionnels Certifiés</h4>
                                    <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #555555;">
                                        Nos partenaires sont des experts certifiés dans leur domaine.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-thumbs-up fa-3x mb-3" style="color: #50C878;"></i>
                                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Satisfaction Garantie</h4>
                                    <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #555555;">
                                        95% de nos clients sont satisfaits de nos services.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Solution à Guichet Unique -->
    <section id="guichet-unique" class="py-5" style="background-color: #0077B6;">
        <div class="container">
            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #FFFFFF;">Une Solution Complète</h2>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="lead" style="font-family: 'Roboto', sans-serif; color: #FFFFFF;">
                        Alodo simplifie votre vie en centralisant tout ce dont vous avez besoin. De la recherche de prestataires à la gestion des commandes, tout est à portée de clic.
                    </p>
                    <div class="row mt-5">
                        <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-delay="100">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Étape 1 : Recherche</h4>
                                    <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #555555;">
                                        Trouvez rapidement le prestataire qu'il vous faut grâce à notre moteur de recherche intuitif.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4" data-aos="fade-left" data-aos-delay="200">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Étape 2 : Réservation</h4>
                                    <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #555555;">
                                        Réservez en quelques clics et recevez une confirmation instantanée.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Expérience sur Mesure -->
    <section id="sur-mesure" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Une Expérience sur Mesure</h2>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="lead" style="font-family: 'Roboto', sans-serif; color: #333333;">
                        Nous adaptons nos services à vos besoins spécifiques. Bénéficiez de réductions exclusives, d'une assistance personnalisée et de solutions adaptées à votre quotidien.
                    </p>
                    <div class="row mt-5">
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-percent fa-3x mb-3" style="color: #FF8C00;"></i>
                                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Réductions Exclusives</h4>
                                    <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #555555;">
                                        Profitez de réductions spéciales réservées à nos utilisateurs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-headset fa-3x mb-3" style="color: #50C878;"></i>
                                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Assistance 24/7</h4>
                                    <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #555555;">
                                        Notre équipe est disponible à tout moment pour vous aider.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-cogs fa-3x mb-3" style="color: #0077B6;"></i>
                                    <h4 class="card-title" style="font-family: 'Poppins', sans-serif; color: #0077B6;">Solutions Adaptées</h4>
                                    <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #555555;">
                                        Des services conçus pour répondre à vos besoins spécifiques.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Services Populaires 
    <section class="popular-services-section py-5">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Services populaires près de chez vous</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100">
                        <img src="images/plomberie.jpg" class="card-img-top" alt="Plomberie">
                        <div class="card-body">
                            <h4 class="card-title">Plomberie</h4>
                            <p class="card-text">Réparez vos fuites et installations en un clin d'œil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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