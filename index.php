<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="node_modules/bootswatch/dist/minty/bootstrap.min.css" />
  <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
  <link rel="stylesheet" href="node_modules/@mdi/font/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="icon" href="assets/images/favicon.ico" />
  <title>CV - Camille Mathien</title>
</head>

<body>
  <!--Séparation visuelle-->
  <div class="separator">
    <img class="thumbnail img-fluid background h-50" src="assets/images/background.webp" alt="image" />
  </div>
  <!--Header-->
  <div class="container-fluid">
    <div class="row bordered-container header-height">
      <div class="col-5 text-end">
        <img src="assets/images/profil.png" alt="Camille Mathien" class="
              img-thumbnail
              rounded-circle
              photo
              m-2
              p-0
            " data-aos="flip-left" data-aos-duration="1500" />
      </div>
      <div class="col ml-5 my-auto police-speciale">
        <h1 class="
              display-5
              police-titres
              text-uppercase
            " data-aos="zoom-out" data-aos-duration="1500">
          Camille Mathien
        </h1>
        <p class="lead header-subtitle">
          <strong>
            Future développeuse web
            <span class="text-blue" id="spin" data-aos="zoom-out" data-aos-duration="1500"></span></strong>
        </p>
      </div>
    </div>
  </div>

  <!--Séparation visuelle-->
  <div class="separator">
    <img class="thumbnail img-fluid background h-50" src="assets/images/background.webp" alt="image" />
  </div>

  <!--Timelines : Expériences professionnelles et formation-->
  <div class="container">
    <div class="row text-center">
      <h1 class="display-6 subtitles my-2">
        <i class="mdi mdi-briefcase me-2 text-blue" aria-hidden="true"></i>Expérience professionnelle et formation<i class="mdi ms-2 mdi-school text-pink" aria-hidden="true"></i>
      </h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="main-timeline">
          <div class="timeline">
            <div class="timeline-icon">
              <span class="year"><i class="mdi mdi-school" aria-hidden="true"></i></span>
            </div>
            <div class="timeline-content" data-aos="fade-up">
              <h3 class="title-year">2021&nbsp;&#8211;&nbsp;en cours</h3>
              <h3 class="title">Développeur web et web mobile<br>(titre RNCP niveau 5)</h3>
              <p class="description">AFPA (Roubaix, France)</p>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-icon">
              <span class="year"><i class="mdi mdi-briefcase" aria-hidden="true"></i></span>
            </div>
            <div class="timeline-content" data-aos="fade-up">
              <h3 class="title-year">
                Novembre 2017&nbsp;&#8211;&nbsp;Juillet 2020
              </h3>
              <h3 class="title">Traductrice-relectrice</h3>
              <p class="description">Trans4europe (Roubaix, France)</p>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-icon">
              <span class="year"><i class="mdi mdi-briefcase" aria-hidden="true"></i></span>
            </div>
            <div class="timeline-content" data-aos="fade-up">
              <h3 class="title-year">
                Novembre 2015&nbsp;&#8211;&nbsp;Février 2016
              </h3>
              <h3 class="title">Stagiaire professeur d’allemand</h3>
              <p class="description">
                Collège Alphonse Daudet (Nice, France)
              </p>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-icon">
              <span class="year"><i class="mdi mdi-briefcase" aria-hidden="true"></i></span>
            </div>
            <div class="timeline-content" data-aos="fade-up">
              <h3 class="title-year">
                Mai 2015&nbsp;&#8211;&nbsp;Juillet 2015
              </h3>
              <h3 class="title">
                Stagiaire professeur de français langue étrangère
              </h3>
              <p class="description">
                Sankt Marien-Schulen (Ratisbonne, Allemagne)
              </p>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-icon">
              <span class="year"><i class="mdi mdi-school" aria-hidden="true"></i></span>
            </div>
            <div class="timeline-content" data-aos="fade-up">
              <h3 class="title-year">2014&nbsp;&#8211;&nbsp;2016</h3>
              <h3 class="title">
                Master «&nbsp;Métier de l’enseignement, de l’éducation et de
                la formation, 2nd&nbsp;degré, spécialité allemand&nbsp;»<br />Master
                «&nbsp;Lehramt International&nbsp;»
              </h3>
              <p class="description">
                Université Nice Sophia Antipolis (France) • ÉSPÉ de l’Académie
                de Nice (France) • Universität Regensburg (Allemagne)
              </p>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-icon">
              <span class="year"><i class="mdi mdi-briefcase" aria-hidden="true"></i></span>
            </div>
            <div class="timeline-content" data-aos="fade-up">
              <h3 class="title-year">
                Octobre 2013&nbsp;&#8211;&nbsp;Mai 2014
              </h3>
              <h3 class="title">Assistante de français langue étrangère</h3>
              <p class="description">Hebbelschule (Kiel, Allemagne)</p>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-icon">
              <span class="year"><i class="mdi mdi-school" aria-hidden="true"></i></span>
            </div>
            <div class="timeline-content" data-aos="fade-up">
              <h3 class="title-year">2010&nbsp;&#8211;&nbsp;2013</h3>
              <h3 class="title">
                Licence «&nbsp;Langues, littératures et civilisations
                étrangères, spécialité allemand&nbsp;»
              </h3>
              <p class="description">
                Université d’Angers (France) • Bergische Universität Wuppertal
                (Allemagne) : Erasmus (semestres 5 et 6)
              </p>
            </div>
          </div>
          <div class="timeline">
            <div class="timeline-icon">
              <span class="year"><i class="mdi mdi-school" aria-hidden="true"></i></span>
            </div>
            <div class="timeline-content" data-aos="fade-up">
              <h3 class="title-year">2010</h3>
              <h3 class="title">
                Baccalauréat «&nbsp;Économique et social, option européenne
                Allemand&nbsp;»
              </h3>
              <p class="description">Lycée La Colinière (Nantes, France)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Séparation visuelle-->
  <div class="separator">
    <img class="thumbnail img-fluid background h-50" src="assets/images/background.webp" alt="image" />
  </div>
  <!--Compétences-->
  <div class="container my-5">
    <div class="row text-center my-2 mx-auto">
      <h1 class="display-6 subtitles my-2">
        <i class="mdi mdi-medal-outline me-2"></i> Compétences
      </h1>
    </div>
    <div class="row section-to-animate">
      <div class="row text-center my-2">
        <div class="row m-2">
          <div class="col-sm">
            <div class="lead my-2">HTML5</div>
            <div class="html5 to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-language-html5 my-2 color-html5"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">CSS3</div>
            <div class="css3 to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-language-css3 my-2 color-css3"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">JavaScript</div>
            <div class="js to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-language-javascript my-2 color-js"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">Sass</div>
            <div class="sass to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-sass my-2 color-sass"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">PHP</div>
            <div class="php to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-language-php my-2 color-php"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">SQL</div>
            <div class="sql undefined to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-database-search my-2 color-undefined"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row m-2">
          <div class="col-sm">
            <div class="lead my-2">Angular</div>
            <div class="angular to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-angular my-2 color-angular"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">Nuxt.js</div>
            <div class="nuxt to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-nuxt my-2 color-nuxt"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">Bootstrap</div>
            <div class="bootstrap to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-bootstrap my-2 color-bootstrap"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">Vuetify</div>
            <div class="vuetify to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-vuetify my-2 color-vuetify"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">Symfony</div>
            <div class="symfony to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-symfony my-2 color-symfony"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">Ionic</div>
            <div class="ionic to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-google-circles my-2 color-ionic"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row m-2">
          <div class="col-sm">
            <div class="lead my-2">MySQL</div>
            <div class="mysql to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-database my-2 color-mysql"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">Microsoft SQL Server</div>
            <div class="msserver to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-database my-2 color-msserver"></i>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="lead my-2">Merise</div>
            <div class="merise undefined to-animate">
              <span class="progress-left">
                <span class="progress-bar"></span>
              </span>
              <span class="progress-right">
                <span class="progress-bar"></span>
              </span>
              <div class="progress-value">
                <i class="mdi mdi-graph my-2 color-undefined"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center mt-5 mb-2">
      <table class="table table-borderless flag-table">
        <tbody>
          <tr>
            <td>
              <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg" alt="Français" title="Français" width="45px" height="30px" />
            </td>
            <td>
              <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Flag_of_Germany.svg" alt="Allemand" title="Allemand" width="45px" height="30px" />
            </td>
            <td>
              <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg" alt="Anglais" title="Anglais" width="45px" height="30px" />
            </td>
          </tr>
          <tr class="lead">
            <td>Langue maternelle</td>
            <td>C1/C2<br />Test DaF TDN5</td>
            <td>B1/B2</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--Séparation visuelle-->
  <div class="separator">
    <img class="thumbnail img-fluid background h-50" src="assets/images/background.webp" alt="image" />
  </div>
  <!--Portfolio-->
  <div class="album bg-light py-5">
    <div class="container">
      <div class="row text-center mb-2 mx-auto">
        <h1 class="display-6 subtitles">
          <i class="mdi mdi-book-multiple-outline me-2"></i> Portfolio
        </h1>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm card-height">
            <img src="assets/images/illustration_email.png" alt="Miniature - Email" class="mx-auto portfolio-thumbnail" />
            <div class="card-body bordered-card">
              <p class="card-title lead text-uppercase text-center">E-mail</p>
              <p class="card-text">
                Cette application analyse l'adresse e-mail saisie en vérifiant
                si elle remplit certaines caractéristiques propres aux
                adresses mail.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-pink mx-auto" onclick="parent.open('portfolio1.html')">
                  Voir
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm card-height grow">
            <img src="assets/images/illustration_mdp.png" alt="Miniature - Mot de passe" class="mx-auto portfolio-thumbnail" />
            <div class="card-body bordered-card">
              <p class="card-title lead text-uppercase text-center">
                Mot de passe
              </p>
              <p class="card-text">
                Cette application indique la force du mot de passe saisi.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-pink mx-auto" onclick="parent.open('portfolio2.html')">
                  Voir
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm card-height">
            <img src="assets/images/illustration_juste_prix.png" alt="Miniature - Juste Prix" class="mx-auto portfolio-thumbnail" />
            <div class="card-body bordered-card">
              <p class="card-title lead text-uppercase text-center">
                Juste Prix
              </p>
              <p class="card-text">
                Cette application affiche une image aléatoire à laquelle elle
                assigne un prix à deviner.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-pink mx-auto" onclick="parent.open('portfolio3.html')">
                  Voir
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm card-height">
            <img src="assets/images/illustration_pendu.png" alt="Miniature - Pendu" class="mx-auto portfolio-thumbnail" />
            <div class="card-body bordered-card">
              <p class="card-title lead text-uppercase text-center">Pendu</p>
              <p class="card-text">
                Cette application choisit un mot au hasard que l'utilisateur
                doit deviner.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-pink mx-auto" onclick="parent.open('portfolio4.html')">
                  Voir
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm card-height">
            <img src="assets/images/illustration_mastermind.png" alt="Miniature - Mastermind" class="mx-auto portfolio-thumbnail" />
            <div class="card-body bordered-card">
              <p class="card-title lead text-uppercase text-center">Mastermind</p>
              <p class="card-text">
                Cette application choisit une combinaison de bille colorées à deviner.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-pink mx-auto" onclick="parent.open('portfolio5.html')">
                  Voir
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm card-height">
            <img src="assets/images/illustration_monnaie.png" alt="Miniature - Monnaie" class="mx-auto portfolio-thumbnail" />
            <div class="card-body bordered-card">
              <p class="card-title lead text-uppercase text-center">Monnaie</p>
              <p class="card-text">
                L'application calcule la monnaie à rendre en fonction du montant saisi.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-sm btn-pink mx-auto" onclick="parent.open('portfolio6.html')">
                  Voir
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Séparation visuelle-->
  <div class="separator">
    <img class="thumbnail img-fluid background h-50" src="assets/images/background.webp" alt="image" />
  </div>
  <!--Informations personnelles et formulaire de contact-->
  <div class="container my-2">
    <div class="row text-center g-5">
      <!--Informations personnelles-->
      <div class="col-lg">
        <h1 class="display-6 subtitles my-2">
          <i class="mdi mdi-card-account-details-outline me-2"></i>
          Informations personnelles
        </h1>
        <div class="
              alert
              background-blue
              text-white
              d-flex
              align-items-center
              my-4
              shadow
            " role="alert">
          <i class="mdi mdi-home me-2"></i>
          <div>28, rue Rémy Cogghe • 59100 ROUBAIX</div>
        </div>
        <div class="
              alert
              background-blue
              text-white
              d-flex
              align-items-center
              my-4
              shadow
            " role="alert">
          <i class="mdi mdi-phone me-2"></i>
          <div><a href="tel:+33671502426">06•71•50•24•26</a></div>
        </div>
        <div class="
              alert
              background-blue
              text-white
              d-flex
              align-items-center
              my-4
              shadow
            " role="alert">
          <i class="mdi mdi-at me-2"></i>
          <div>
            <a href="mailto:camille.mathien@gmail.com">camille.mathien@gmail.com</a>
          </div>
        </div>
        <div class="
              alert
              background-blue
              text-white
              d-flex
              align-items-center
              my-4
              shadow
            " role="alert">
          <i class="mdi mdi-linkedin me-2"></i>
          <div>
            <a href="https://www.linkedin.com/in/camille-mathien/" target="_blank">Camille Mathien</a>
          </div>
        </div>
        <div class="
              alert
              background-blue
              text-white
              d-flex
              align-items-center
              my-4
              shadow
            " role="alert">
          <i class="mdi mdi-file-download me-2"></i>
          <div>
            Télécharger la version PDF de ce CV en cliquant
            <strong><a href="assets/images/CV_Camille_MATHIEN.pdf" download>ici</a></strong>.
          </div>
        </div>
      </div>
      <!--Formulaire-->
      <div class="col-lg">
        <h1 class="display-6 subtitles my-2">
          <i class="mdi mdi-mailbox-outline me-2"></i> Formulaire de contact
        </h1>
        <form class="row text-start" id="form" method="POST" action="mailer.php">


          <div class="col-md-12 my-2">
            <label for="validationDefault02" class="form-label">Nom</label>
            <input type="text" class="form-control" id="validationDefault02" placeholder="Nom" name="name" required />
          </div>
          <div class="col-md-12 my-2">
            <label for="validationDefault03" class="form-label">E-mail</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend2"><i class="mdi mdi-at"></i></span>
              <input type="email" class="form-control" id="validationDefault03" aria-describedby="inputGroupPrepend2" placeholder="exemple@mail.com" name="email" required />
            </div>
          </div>
          <div class="col-md-12 my-2">
            <label for="validationDefault04" class="form-label">Objet</label>
            <input type="text" class="form-control" id="validationDefault04" placeholder="Objet du message" name="subject" required />
          </div>
          <div class="col-md-12 my-4">
            <label for="validationDefault05" class="form-label">Message</label>
            <textarea type="text" class="form-control" id="validationDefault05" placeholder="Saisir votre message ici" name="message" required></textarea>
          </div>
          <div class="g-recaptcha" data-sitekey="6LeMTkYbAAAAAA5zX_C5hGfhK11hA9-KwfBwFD-y"></div>
          <div class="row">
            <div class="col my-2 text-center">
              <button class="btn btn-blue mx-2" type="submit" name="submit">Envoyer</button>
              <button class="btn btn-pink mx-2" type="reset">
                Réinitialiser
              </button>
            </div>
          </div>
          <div class="col my-2 text-center lead text-blue"><strong>
              <?php
              if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
              }
              ?>
            </strong></div>
        </form>
      </div>
    </div>
  </div>
  <!--Séparation visuelle-->
  <div class="separator">
    <img class="thumbnail img-fluid background h-50" src="assets/images/background.webp" alt="image" />
  </div>
  <!--Footer-->
  <footer class="py-2 text-white background-blue text-center">
    <small>2021&nbsp;&#8212;&nbsp;Camille Mathien</small>
  </footer>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="node_modules/simple-parallax-js/dist/simpleParallax.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="node_modules/aos/dist/aos.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>