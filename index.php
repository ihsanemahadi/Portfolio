<?php 
if(isset($_POST['mail'])){
    $to = "ihsane_mahadi@hotmail.com";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $message = $_POST['message'];
    $from = $_POST['mail'];
    mail($to,$firstname,$lastname,$message,$from);
    ?>

    <div class="alert alert-info" role="alert">
        Message envoyé
    </div>
<?php } ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <!-- Btn flottant gauche petit menu -->

    <div class="btn-rond-menu">
        <div class="cont-ligne">
            <div class="ligne-unique"></div>
        </div>
    </div>

    <!-- Navigation verticale -->

    <nav class="nav-gauche">

        <div class="blocs-menu">
            <div class="cercle-portrait">
                <img src="ressources/boss.png" alt="portrait img">
            </div>
        </div>

        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#accueil">
                    Accueil
                </a>
            </span>
        </div>
        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#pres">
                    Présentation
                </a>
            </span>
        </div>
        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#port">
                    Portfolio
                </a>
            </span>
        </div>
        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#contact">
                    Contact
                </a>
            </span>
        </div>



        <div class="blocs-menu">
            <div class="logo-cercle">
                <a href="#contact">
                    <img src="ressources/contact.svg" alt="logo contact">
                </a>
            </div>
        </div>

    </nav>

    <!-- Section Accueil -->

    <section class="accueil" id="accueil">
        <h1>Bienvenue sur mon portfolio</h1>
        <p class="txt-animation"></p>
        <a href="#" class="btn-acc btn-acc1">Portfolio</a>
        <a href="#" class="btn-acc btn-acc2">Expériences</a>

        <div class="medias">
            <a href="https://github.com" target="blank">
                <div class="media media1">
                    <img src="ressources/github.svg" alt="github icone" class="icone-medias">
                </div>
            </a>
            <a href="https://www.linkedin.com/in/ihsane-anli-mahadi-70b1b822a" target="blank">
                <div class="media media2">
                    <img src="ressources/linkedin.svg" alt="linkedin icone" class="icone-medias">
                </div>
            </a>
        </div>

        <a href="#pres">
            <div class="btn-rond">
                <img src="ressources/arrowDown.svg" alt="logo fleche bas" class="logo-btn-rond-acc">
            </div>
        </a>
    </section>

<!-- Section Présentation -->

<section class="presentation" id="pres">

    <h2 class="titre-pres">Qu'est-ce que je fais ?</h2>

    <div class="container-presentation">

        <div class="fond-forme"></div>

        <div class="pres-gauche">
            <h3>Plus qu'un métier une passion..</h3>
            <hr>
            <p>Passionée  par le développement web depuis bientôt 3 ans,
            J'aspire à trouver des solutions pour chaque problèmes! Que ce soit dans le cadre d’une création de site internet ou bien directement d’une refonte, je suis également apte à vous développer des sites sur mesure qui répondront alors à vos attentes.
            Je mets un point d’honneur à développer toutes les fonctionnalités possibles afin d’offrir par la suite à vos lecteurs une expérience de navigation et d’utilisation de votre site exemplaire et agréable.</p>
            <br>
            <p>
            Un site internet bien développé est un internaute de gagné.</p>
        </div>
        
        <div class="pres-droite">
            <ul class="liste-presentation">
                <li class="item-liste i1">
                    <span class="chiffre-style">1.</span>
                    <p class="txt-liste">Gestion de projets web</p>
                    <p class="">Site vitrine, corporate, évènementiel,
                        e-commerce</p>
                </li>
                <li class="item-liste i2">
                    <span class="chiffre-style">2.</span>
                    <p class="txt-liste">Intégration Web</p>
                    <p class="">Des intégrations (X)HTML / CSS
                        respectueuses des standards du Web.</p>
                </li>
                <li class="item-liste i3">
                    <span class="chiffre-style">3.</span>
                    <p class="txt-liste">Responsive Design</p>
                    <p class="">Compatible tous supports, tablette & application mobile.</p>
                </li>
                <li class="item-liste i4">
                    <span class="chiffre-style">4.</span>
                    <p class="txt-liste">Référencement naturel</p>
                    <p class="">Affichage sémantique des informations,
                        des pages propres pour un référencement optimal.</p>
                </li>
                
            </ul>
        </div>
        
    </div>

</section>

<!-- Section Portfolio -->

<section class="portfolio" id="port">


    <h2 class="titre-port">Mon Portfolio</h2>

    <div class="cont-portfolio">


        <div class="item vague1">
            <div class="cont-img-port">
                <img src="ressources/portfolio.png" alt="img portfolio">
            </div>
            <p>Projet portfolio : HTML/CSS/Bootstrap/Javascript</p>
            <a href="#" class="btn-projets">Découvrez le projet</a>
        </div>

        <div class="item vague1">
            <div class="cont-img-port">
                <img src="ressources/sweetcapture.png" alt="img portfolio">
            </div>
            <p>Projet site vitrine : HTML/CSS/Bootstrap/Javascript/PHP/MySQL</p>
            <a href="#" class="btn-projets">Découvrez le projet</a>
        </div>

        <div class="item vague1">
            <div class="cont-img-port">
                <img src="ressources/webagency.png" alt="img portfolio">
            </div>
            <p>Projet site vitrine : HTML/CSS</p>
            <a href="#" class="btn-projets">Découvrez le projet</a>
        </div>


        <!--<div class="item vague2">
            <div class="cont-img-port">
                <img src="ressources/bootstrapsite.jpg" alt="img portfolio">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, dolore?</p>
            <a href="#" class="btn-projets">Découvrez le projet</a>
        </div>-->


        


 
    </div>


</section>

<!-- Section Parallax -->

<div class="section-parallax">
    <p class="txt-par">
      2 ans d'expériences
    </p>

</div>


<!-- Section Contact -->

<section class="section-contact" id="contact">

    <h2><strong>Rentrons</strong> en Contact</h2>

    <div class="container-form">

        <form method="POST" action="" class="form-bloc">

            <div class="form-groupe">
                <label for="prenom">Prénom</label>
                <input type="text" required maxlength="30" name="firstname" id="prenom">
            </div>
            <div class="form-groupe">
                <label for="nom">Nom</label>
                <input type="text" name="lastname" required maxlength="30" id="nom">
            </div>

            <div class="form-groupe">
                <label for="email">Email</label>
            <input type="email" name="mail" required maxlength="50" id="email">
            </div>

            <div class="form-groupe">
                <textarea id="txt" name="message" placeholder="Votre message" required></textarea>
            </div>

            <div class="form-groupe">
                <input type="submit" value="ENVOYER" class="button-sub">
            </div>

        </form>

    </div>


</section>

<footer>
    Tout Droits réservés &copy;
</footer>










    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="app.js"></script>
</body>
</html>