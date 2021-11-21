<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <link rel="stylesheet" href="public/css/other.css">
    <title>Document</title>
</head>
<body>


<div class="container">

    <section>
        <div class="presentation">
            <h1>Hello world, ici Lettycia</h1>
            <p>
                jeune étudiante passioner par le devellopement web , mobile et l'ux disign, Je serai..... Lorem ipsum
                dolor sit amet, consectetur adipisicing elit. Amet delectus esse quam quas vel? Ad, cupiditate facere
                illo, iste iure nemo nisi odit officiis perspiciatis quod rem repellat ut vel.
            </p>
            <a href="#" class="btn-contact">Contacter moi</a>
        </div>
    </section>

    <!-- COMPETENNCES -->
    <section class="competences-card">
        <h2 class="competence-title"> Mes compétences </h2>
        <div class="competence-content">
            <div class="competence">
                <div class="items-card">
                    <div class="items-labelle">
                        <h3>
                            <i class="uil uil-brackets-curly"></i> Front
                        </h3>
                        <div class="item">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JS</span>
                        </div>
                    </div>

                    <div class="items-labelle">
                        <h3>
                            <i class="uil uil-programming-language icone"></i> Back
                        </h3>
                        <div class="item">
                            <span>PHP</span>
                            <span>PYTHON</span>
                        </div>
                    </div>

                    <div class="items-labelle">
                        <h3>
                            <i class="uil uil-object-group icone"></i> Design
                        </h3>
                        <div class="item">
                            <span>Photoshop</span>
                            <span>Illustrator</span>
                            <span>Adobe xd</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="competence-img">
                <img src="public/images/img1.png" alt="">
            </div>
        </div>
    </section>

    <section>

        <div class="project-card">
            <span onclick="getSlides(-1)" id="left"> <i class="fas fa-arrow-circle-left"></i></span>
            <span onclick="getSlides(1)" id="right"> <i class="fas fa-arrow-circle-right"></i></span>
            <div class="project-item">
                <div class="mySlide fade">
                    <img src="public/images/mesProjets/projet.png" alt="">
                    <div class="text"> PHP - HTML/CSS/JS
                        <br><a href="">Voir plus</a></div>
                </div>
                <div class="mySlide fade">
                    <img src="public/images/dev.png" alt="">
                    <div class="text"> PHP - HTML/CSS/JS</div>
                </div>
                <div class="mySlide fade">
                    <img src="public/images/bg2.png" alt="">
                    <div class="text"> PHP - HTML/CSS/JS</div>
                </div>
            </div>
        </div>


        <div style="width: 100%; display:flex; align-items:center; justify-content:center;">
            <div>
                <a class="allProjects" href="">Tous mes projets</a>
            </div>
        </div>

    </section>

    <section>
        <div class="contact">
            <div class="contact-form">
                <form action="portfolio-leti/contact" method="post">
                    <select name="job" id="job" required>
                        <option value="">--Choisir--</option>
                        <option value="interview">Proposition d'entretient</option>
                        <option value="colaborate">Demande de collaboration</option>
                        <option value="sayHi">Faire un coucou</option>
                    </select>
                    <input name="nom" type="text" placeholder="Votre nom & prénom" required>
                    <input name="email" type="text" placeholder="Votre email" required>
                    <textarea name="message" placeholder="Message ..." required></textarea>
                    <input type="submit" value="Envoyer">
                </form>
    </section>

</div>
<script src="public/js/main.js"></script>
</body>
</html>