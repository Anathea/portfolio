<!DOCTYPE html>
<!--Portfolio created by Solène FERNANDEZ SERRANO
On March the 30th, 2017
Last update : March the 30th, 2017-->
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Solène Fernandez Serrano">
        <meta name="description" content="My name is Solène Fernandez Serrano and I am a professionnal web developer also known as Anathea. What you're about to see is my portfolio. Don't worry. It's won't bite (it shouldn't, at least) !">
        <meta name="keywords" content="Solène, Fernandez, Serrano, Solene, Portfolio,
              freelance, code, HTML, HTML5, CSS, CSS3, JS, Javascript, développeur web,
              développeuse web, web dev, developer, developer, programmer, stage,
              internship, hire, git, github, linkedin, mail, website, english,
              french, français, française, anglais, internet, test, text, young,
              junior, scratch, from srcatch, fait-main, fait-maison, do it yourself,
              diy, framework, cms, wordpress, prestashop, drupal, symphony, django,
              python, security, linux, ubuntu, debian, sécurité, securite, PHP,
              open source, open, source, google, lilo, espagnol, espanol, español,
              jquery, ajax, curiosité, curiosite, curiosity, passion, work, travail,
              stage, stagiaire, intern, internship, professionnel, professionnelle,
              gitlab, opquast">

        <!--Styles-->
        <link rel="stylesheet" href="styles/style.min.css" type="text/css">

        <!--JS-->
        <script type="text/javascript" src="#"></script>
        <script type="text/javascript">window.onload = getWelcome;</script>

        <!--Tab-->
        <title>Solène Fernandez Serrano</title>
        <link rel="shortcut icon" href="img-layout/favicon.png">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="main">
            <div class="big-home">
                <h1>Solène Fernandez Serrano</h1>
                <h2>Je suis une<strong> développeuse web back-end</strong></h2>
<!--                <h3>Et je postule pour l'agence avignonaise Vertuoz !</h3>-->
            </div>
            <section>
                <aside>
                    <img alt="icon woman" src="img-content/me.png" class="icon">
                    <h2>Fun facts !</h2>
                    <ul>
                        <li><h4>Solène Fernandez Serrano</h4><p> (oui, comme le jambon espagnol)</p></li>
                        <li><h4>Étudiante à <a href="https://www.hetic.net/formations/bachelor-web" title="HÉTIC, Bachelor Web" class="hetic"><img alt="logo HETIC" src="img-content/logo_hetic.png"> HÉTIC</a></h4><p> (mais made in Avignon !)</p></li>
                        <li><h4>Bilangue en anglais et en espagnol</h4><p> (comme si mon nom n'était pas assez évident)</p></li>
                        <li><h4>Rigoureuse et créative</h4><p> (j'aime garder mon code propre)</p></li>
                        <li><h4>Grande voyageuse</h4><p> (je suis une fan inconditionnelle du Canada)</p></li>
                        <li><h4>En recherche de stage dev back-end</h4> <span id="vertuoz">J'ai capté votre attention ? Vous avez capté la mienne !</span></li>
                    </ul>
                </aside>
                <div class='projets'>
                    <a href="https://github.com/Anathea"><img alt="Git" src="img-content/git.png" class="icon"></a>
                    <h2>Qu'est-ce que je sais faire ?</h2>
                    <article class="prothese">
                        <h3>P. M. Prothèse</h3>
                        <h4>Mars 2017</h4>
                        <p>Objectif : valoriser la 3D temps réel (Unity) au sein des sites web</p>
                        <p>P. M. Prothèse permet de personnaliser sa future
                        prothèse sur une interface 3D et de générer un bon de
                        commande à partir de ses propres choix. La 3D permet ainsi de
                        transformer un formulaire classique en créant une
                        expérience plus ludique et attractive.</p>
                        <p>Réalisation d'une base de données pour les différents
                        patients. Création d'un outil de gestion pour le médecin :
                        créer un nouveau profil patient, consulter les détails,
                        modifier les informations et supprimer un ancien profil.
                        Découverte de l'Ajax pour communiquer avec le plugin Unity.</p>
                        <div class='skills'>PHP - Git - Unity - Vendre</div>
                        <h5>Projet réalisé en 4 jours avec une équipe de 5 personnes</h5>
                    </article>
                    <article class="player">
                        <h3>Player OST</h3>
                        <h4>Janvier 2017</h4>
                        <p>Objectif : Réaliser un player de musique fonctionnel en une nuit</p>
                        <p>Player OST est un player diffusant les plus belles
                        musiques des bande-sons de jeux vidéos. Il permet
                        également de créer ses propres playlists.</p>
                        <p>Nuit charette full Javascript ! Le saut d'une musique,
                        le retour sur la musique précédente, le déplacement du
                        curseur, l'arrêt de la musique et sa reprise sont
                        entièrement gérés en Javascript ES6. L'orienté objet et
                        la lecture de documentations étaient évidement au rendez-vous.</p>
                        <div class='skills'>Javascript ES6 - HTML 5 - CSS 3 - Travail d'équipe</div>
                        <h5>Projet réalisé en moins de 10 heures, équipe de 6 personnes</h5>
                    </article>
                    <article class="hearthstone">
                        <h3>Wiki-Hearthstone</h3>
                        <h4>Décembre 2016</h4>
                        <p>Objectif : Réaliser un CRUD fonctionnel</p>
                        <p>Wiki-Hearthstone est un site répertoriant toutes les
                        cartes de la dernière extension Kerazan du jeu Hearthstone.
                        Ce site étant un wiki, tout le monde peut proposer une carte.
                        L'administrateur peut ensuite rendre visible la proposition,
                        modifier une carte, la supprimer ou en ajouter d'autres.</p>
                        <p>Réalisation de l'intégralité d'une architecture de site from scratch.
                        Création et gestion d'une base de données. Système de
                        recherche d'une carte. Notion de sécurité.</p>
                        <div class='skills'>PHP - Git - Github - Sécurité</div>
                        <h5>Projet réalisé en 4 jours avec une équipe de 5 personnes</h5>
                    </article>
                </div>
            </section>
            <footer>
                <div class="cluster">
                    <h2>Solène Fernandez Serrano</h2>
                    <div class="links">
                        <ul>
                            <li><a href="https://www.facebook.com/people/Sol%C3%A8ne-Fernandez-Serrano/100011344283484"><img alt="Facebook" src="img-content/facebook.svg"></a></li>
                            <li><a href="https://twitter.com/SoleneAnathea"><img alt="Twitter" src="img-content/twitter.svg"></a></li>
                            <li><a href="https://www.linkedin.com/in/soleneanathea"><img alt="LinkedIn" src="img-content/linkedin.svg"></a></li>
                            <li><a href="https://github.com/Anathea"><img alt="GitHub" src="img-content/github.svg"></a></li>
                            <li><a href="mailto:contact@solenefernandezserrano.com" title="contact@solenefernandezserrano.com"><img alt="Mail" src="img-content/mail.svg"></a></li>
                        </ul>
                        <a href="legal.php"><p id="dissident">Mentions légales</p></a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
