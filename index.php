<?php 
session_start();
$nom = isset( $_SESSION['nom']) ? $_SESSION['nom'] : '';
?>  

<!DOCTYPE html>
<html lang="fr" class="h-100">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Établissement de formations en Technologies de l'Information</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">
</head>


<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">IT School</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <i class="material-icons">home</i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#formations">Formations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us">À propos de nous</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contactez-nous</a>
                                </li>
                                <?php if($nom != ""){?>
                                   <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                   </li>
                                <?php } ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     Compte
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                    <?php if($nom != ""){ ?>
                                        <a class="dropdown-item" href="signout.php">Déconnexion</a>  
                                      <?php }else{ ?>
                                          <a class="dropdown-item" href="register6.php">Inscription</a>
                                          <a class="dropdown-item" href="login6.php">Connexion</a>
                                      <?php } ?>
                                    </div>
                                </li>
                               
                                <li>
                                  <span class="text text-white"> <?php echo  $nom != '' ?  "welcome $nom"  : '' ; ?></span>
                                </li>
                                <!-- <li>
                                  <button class="btn btn-danger"><a href="signout.php">Sign out</a></button>
                                </li> -->
                            </ul>
                            <!-- <form class="d-flex">
                                <input class="form-control me-2" type="rechercher" placeholder="Rechercher"
                                    aria-label="Rechercher">
                                <button class="btn btn-outline-success" type="submit">
                                    <i class="material-icons">search</i>
                                </button>
                            </form> -->

                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
                style="background-image: url('images/background1.jpg'); height: 100vh;" />
            <!-- <img src="/images/background1.jpg"/> -->
            <div class="h-100 row align-items-center">
                <div class="col">
                    <h1 class="mb-3 h1">Notre établissement, votre avenir.</h1>
                    <p class="lead">
                        <br>
                        <a href="#formations" class="btn btn-lg btn-secondary fw-bold border-white bg-blue">Découvrir nos formations</a>
                    </p>
                </div>
            </div>
        </main>






        <section class="page-section" id="formations">
            <div class="container">
                <div class="text-center">
                    <br><br><br>
                    <h2 class="section-heading text-uppercase">Nos Formations</h2>
                    <br>
                    <h3 class="section-subheading text-muted">Assurez votre avenir dès aujourd'hui.</h3><br><br>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="material-icons">query_stats</i>
                        </span>
                        <h4 class="my-3">Big Data</h4>
                        <p class="text">
                            La gestion des données est une préoccupation majeure de nos jours. C’est pourquoi notre établissement offre une formation en Big Data. Découvrez tout ce que vous devez savoir sur ce cursus professionnel.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="material-icons">language</i>
                        </span>
                        <h4 class="my-3">Web Design</h4>
                        <p class="text">
                            Le web designer définit l'ergonomie, mode de navigation, arborescence, scénarisation, identité visuelle et sonore, charte graphique… Il s’occupe aussi du design des interfaces dédiées au e-commerce et au e-marketing.
                            Le webdesigner dessine, crée des maquettes et retouche des pages internet. Il maîtrise de différents logiciels graphiques : Photoshop, Illustrator, Flash, Dreamweaver… ainsi que des notions dans le maniement d’outils d’intégration (XML, Javascript, etc...).
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="material-icons">account_tree</i>
                        </span>
                        <h4 class="my-3">Administration de Bases de Données</h4>
                        <p class="text">
                            L’administrateur de base de données est un professionnel indispensable pour l’entreprise. Il est en charge d’assurer la disponibilité des informations pour les différents professionnels de l’entreprise. Il conseille l’entreprise sur le système de gestion des bases de données,
                            met en place des logiciels permettant d’exploiter les données,
                            définie les conditions d’accès aux systèmes et les règles de sécurité,
                            assure une veille technologique pour assurer une performance optimale à l’entreprise.
                        </p>
                    </div>
                </div>
            </div>
        </section>






        <section class="page-section" id="about-us">
            <div class="container">
                <div class="text-center">
                    <br><br><br>
                    <h2 class="section-heading text-uppercase">Pourquoi nous?</h2>
                    <br>
                    <h3 class="section-subheading text-muted">L'un des pionniers des formations IT en ligne au Maroc.</h3>
                    <br><br>
                </div>
                <div class="row text-center">
                    <div class="text-center col-md-6">
                        <p>IT School offre bien plus qu'un diplôme, mais aussi un avenir dans de divers domaines en informatique.
                            <br><br>
                            IT School fournit des formations, certificats, programmes et bien plus!
                            Notre objectif est de connecter les étudiants dans tous les bords Maroc afin d'assurer l'intégrité des jeunes dans le marché d'aujourd'hui.
                            <br><br>
                            Approuvé par plus de 800 étudiants depuis 2012 et avec un taux de réussite de 95%, IT School est votre porte vers le succès.
                            <br><br>
                            Inscrivez-vous dès maintenant!
                            <br>
                            <button class="btn btn-secondary" style="margin-top: 10px;">Inscription</button>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="images/comp-sci-1.jpg" class="img-fluid"></img>    
                    </div>
                </div>
            </div>
        </section>




        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <br><br><br>
                    <h2 class="section-heading text-uppercase">Contactez-nous</h2>
                    <?php if(isset($_GET['msg'])){ ?>
                        <div class="alert alert-success"> Le message a été bien envoyé !</div>
                    <?php } ?>
                </div>
                <form method="POST" action="contact.php" id="contactForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-8">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="nom" id="nom" type="text" placeholder="Nom *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="nom:required">Le nom est obligatoire.</div>
                            </div>
                            <br>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">L'email est obligatoire.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email invalide.</div>
                            </div>
                            <br>
                        </div>
                        <div class="form-group form-group-textarea col-md-10">
                            <!-- Message input-->
                            <textarea class="form-control" name="message" id="message" placeholder="Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Le message est obligatoire.</div>
                        </div>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Votre demande a été envoyée avec succès.</div>
                            <br>
                        </div>
                        <br>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erreur lors de l'envoie du message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button type="submit" class="btn btn-primary btn-xl" name="submitContact" id="submitContact">Envoyer</button></div>
                    <br><br>
                </form>
            </div>
        </section>
        




        <footer class="mt-auto text-white-50">
            <p>Suivez-nous sur Facebook <a href="#" class="text-white">ici</a>.
            </p>
        </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
