<section class="accueil" id="accueil">
    <div class="accueil-container">
        <p class="accueil-text">  Salut, je m'appelle  <b>Liticia TADJER.</b>
            <br>
            Étudiante en développement Web et Web mobile à Digital Campus.
        </p>

        <a href="public/pdf/cv/cv.pdf" target="_blank" class="btn-accueil">Mon CV <i class="uil uil-import btn-download"></i> </a>
        <a href="#a-propos"><i class="uil uil-arrow-down arrow-down"></i></a>
    </div>
</section>

<section class="a-propos section " id="a-propos">
    <div class="a-propos-container container">
        <div class="h1-title">
            <h1> A propos de moi </h1>
        </div>
        <div class="qualites">
            <article class="qualite-article">
                <div class="qualite-icone">
                    <img src="public/images/ico1.png" alt="icone">
                </div>
                <div class="qualite">
                    <h3>Ponctuelle</h3>
                </div>
            </article>

            <article class="qualite-article">
                <div class="qualite-icone">
                    <img src="public/images/ico2.png" alt="icone">
                </div>
                <div class="qualite">
                    <h3>Attentive</h3>
                </div>
            </article>

            <article class="qualite-article">
                <div class="qualite-icone">
                    <img src="public/images/ico3.png" alt="icone">
                </div>
                <div class="qualite">
                    <h3>Créative</h3>
                </div>
            </article>

            <article class="qualite-article">
                <div class="qualite-icone">
                    <img src="public/images/ico4.png" alt="icone">
                </div>
                <div class="qualite">
                    <h3>Dynamique</h3>
                </div>
            </article>
        </div>
        <div class="a-propos-presentation">
            <div class="a-propos-photo">
                <img src="public/images/photo.jpg" alt="">
            </div>
            <div class="a-propos-text">
                <p>
                    Étant intéressée par le développement web et web design, j'ai décidé d'intégrer une 
                    formation de développement web et web mobile à Digital Campus. 
                    Actuellement, je cherche à acquérir de l'expérience à travers un stage 
                    à la fin de ma formation actuelle. 
                </p>
            </div>

        </div>
    </div>
</section>

<section class="competences section" id="competences">
    <div class="h1-title">
        <h1> Mes compétences </h1>
    </div>
    <div class="competences-container container">
        <div class="competences-box">
            <h3 class="competences-subtitle"><i class="uil uil-brackets-curly icone"></i>
                Front-end
            </h3>
            <span class="competence-name">HTML</span>
            <span class="competence-name">CSS</span>
            <span class="competence-name">BOOTSTRAP</span>
            <span class="competence-name">JAVASCRIPT</span>

            <h3 class="competences-subtitle"><i class="uil uil-programming-language icone"></i>
                Back-end
            </h3>
            <span class="competence-name">PHP</span>
            <span class="competence-name">PYTHON</span>
            <span class="competence-name">SYMFONY</span>
            <span class="competence-name">WORDPRESS</span>

            <h3 class="competences-subtitle"><i class="uil uil-object-group icone"></i>
                Design
            </h3>
            <span class="competence-name">PHOTOSHOP</span>
            <span class="competence-name">ILLUSTRATOR</span>
            <span class="competence-name">ADOBE XD</span>

        </div>
        <div class="competence-img">
            <img src="public/images/img1.png" alt="image-competence">
        </div>
    </div>
</section>

<section class="projets section" id="projets">
    <div class="h1-title">
        <h1> Mes projets </h1>
    </div>
    <div class="projets-container container">
        <span onclick="getSlides(-1)" id="left"><i class="uil uil-angle-left"></i></span>
        <span onclick="getSlides(1)" id="right"><i class="uil uil-angle-right"></i></span>
        <div class="project-item">
            <div class="projets-content my-slide">
                <img src="public/images/img2.png" alt="" class="projets-img">
                <a href="#projets" class="btn-projet button"> Voir le projet </a>

            </div>
            <div class="projets-content my-slide">
                <img src="public/images/img3.png" alt="" class="projets-img">
                <a href="#" class="btn-projet button"> Voir le projet </a>

            </div>
            <div class="projets-content my-slide">
                <img src="public/images/img4.png" alt="" class="projets-img">
                <a href="#" class="btn-projet button"> Voir le projet </a>
            </div>
        </div>

    </div>
</section>

<section class="contact section" id="contact">
    <div class="h1-title">
        <h1> Contactez-moi </h1>
    </div>


    <div class=" cont container">
        <div class="contact-form">
            <form action="contact" method="post">
                <select name="job" id="job" required>
                    <option value="">--Choisir--</option>
                    <option value="interview">Proposition d'entretien</option>
                    <option value="colaborate">Demande de collaboration</option>
                    <option value="contact">Demande de contact</option>
                </select>
                <input data-min="1" data-max="50" name="nom" type="text" placeholder="Votre nom & prénom" required>
                <input data-min="8" data-max="255" name="email" type="text" placeholder="Votre email" required>
                <textarea name="message" placeholder="Message ..." required></textarea>
                <label for="contact-rgpd">
                    <input class="js-verif-rgpd" id="contact-rgpd" type="checkbox" name="rgpd" required>
                        J'accepte les conditions d'utilisations.
                </label>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</section>