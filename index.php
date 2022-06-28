<?php 
session_start();
if(isset($_SESSION['role_utilisateur'])) { 
  header("location:accueil.php");
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metalinov</title>
    <link rel="stylesheet" href="assets/styles/index.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="stylesheet" href="assets/styles/back.css">
    <script src="https://kit.fontawesome.com/ee02dbcf72.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/ee02dbcf72.js" crossorigin="anonymous"></script>
<body>
<?php include("assets/include/navbar.php") ?>

<div class="photo">
  <div class="image">
    <img src="assets/img/logo-removebg-preview.png" class="center" >
  </div>
  <h1>MÉTALINOV CONÇOIT, FABRIQUE, ET POSE VOTRE CHARPENTE MÉTALLIQUE PARTOUT EN FRANCE</h1>
</div>

<div class="entre">
    <div class="container-fluid">
      <div class="row justify-content-end">
        <div class="d-flex flex-wrap-reverse">
          <div class="col-lg-4 col-md-4 mb-4 mb-md-0 ms-2 align-self-center">
            <img src="assets/img/DSC_0074.jfif" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col align-self-center">
            <div class="mx-auto  w-75">
              <p>Depuis 1987, d’abord sous l’enseigne « Bâtimétal », et depuis janvier 2005 sous l’enseigne « Métalinov », la société est spécialisée dans l’étude et la réalisation de bâtiments professionnels à structure métallique. Notre longue expérience, notre bureau d’études parfaitement adapté aux problèmes les plus spécifiques. Un outil informatique de pointe, des ingénieurs, des dessinateurs à votre écoute, pour étudier, concevoir et coordonner la réalisation de votre projet. Des contrôles continus et rigoureux tout au long du cycle de la réalisation vous assurent un produit fini de qualité et sans défaut.</p>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="slider">
        <div class="img-div div1">
          <img src="assets/img/1.jpg" class="slide" height=100% width=100%>
        </div>
        <div class="img-div div2">
        <img src="assets/img/front3.jpg" class="slide" height=100% width=100%>
        </div>
        <div class="img-div div3">
        <img src="assets/img/front4.jpg" class="slide" height=100% width=100%>
        </div>
        <div class="img-div div4">
        <img src="assets/img/4.jpg" class="slide" height=100% width=100%>
        </div>
        <div class="img-div div5">
        <img src="assets/img/5.jpg" class="slide" height=100% width=100%>
        </div>
        <div class="img-div div6">
        <img src="assets/img/6.jpg" class="slide" height=100% width=100%>
        </div>
        <div class="img-div div7">
        <img src="assets/img/7.jpg" class="slide" height=100% width=100%>
        </div>
        <div class="img-div div8">
        <img src="assets/img/8.jpg" class="slide" height=100% width=100%>
        </div>
</div>

<div class="logo">
  <img src="assets/img/logo-removebg-preview.png" heigth=300px width=100%>
</div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Bureau d'études
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="d-flex flex-wrap-reverse">
          <div class="col-lg-4 col-md-8 mb-8">
            <img src="assets/img/bureau-d-etudes.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col align-self-center">
            <div class="mx-auto  w-75">

              <h2 class="text-center"> Bureau d'études </h2><br>
              <p class="lh-base">
              Notre bureau d’étude est la garantie de la réussite de votre projet. Notre équipe d’ingénieurs et dessinateurs dispose de moyens informatiques performants pour la réalisation de votre étude et de votre mise en fabrication. Du plan général à la plus petite pièce, tout est conçu et modélisé numériquement y compris l’assemblage avant la mise en production. Le traitement numérique de l’information et les programmes développés permettent à notre équipe d’opérateurs d’exécuter ensuite les commandes dans les meilleurs délais.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Atelier de production
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="d-flex flex-wrap-reverse">
          <div class="col-lg-4 col-md-8 mb-8">
            <img src="assets/img/atelier-de-production.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col align-self-center">
            <div class="mx-auto  w-75">

              <h2 class="text-center"> Atelier de production </h2><br>
              <p class="lh-base">
              Grâce à un outil performant et une équipe de trente techniciens qualifiés, nous mettons tout en œuvre pour fabriquer vos structures en charpentes métalliques et vous livrer dans les meilleurs délais. Nos ateliers de fabrication ont une capacité de production de 800 à 1000 tonnes par mois. Notre espace de production (8.800 m2 couvert) nous permet de stocker, transformer, peindre des pièces d’acier jusqu’à 18 mètres de longueur. Notre process de fabrication se décompose en quatre phases majeures : le débit (grenaillage, découpe, perçage, poinçonnage, sciage des différents éléments de structure acier) ; l’assemblage des éléments suivant le plan réalisé par le bureau d’étude ; les soudures réalisées par des opérateurs conformément à la norme EN1090 ; la protection contre la corrosion (galvanisation possible).
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Montage 
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <div class="d-flex flex-wrap-reverse">
          <div class="col-lg-4 col-md-8 mb-8">
            <img src="assets/img/front.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col align-self-center">
            <div class="mx-auto  w-75">

              <h2 class="text-center">Montage</h2><br>
              <p class="lh-base">Nos partenaires, spécialisés dans le montage de bâtiments industriels à structure métallique interviennent en permanence sur toute la France. Vous cherchez une équipe de poseurs, 
              <a class="text-secondary" href="contact/contact.php" target="_blank" rel="noopener noreferrer">contactez-nous</a> dès maintenant.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed bg-secondary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
      La maîtrise de la qualité
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="d-flex flex-wrap-reverse">
          <div class="col-lg-4 col-md-8 mb-8">
            <img src="assets/img/maitrise-de-la-qualite.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col align-self-center">
            <div class="mx-auto  w-75">

              <h2 class="text-center">La maîtrise de la qualité</h2><br>
              <p class="lh-base">Depuis près de 20 ans, des milliers de bâtiments vendus. Notre bureau d’études est parfaitement adapté aux problèmes les plus spécifiques. Un outil informatique de pointe, des ingénieurs, des dessinateurs à votre écoute, pour étudier, concevoir et coordonner la réalisation de votre projet. Des contrôles continus et rigoureux tout au long du cycle de la réalisation vous assurent un produit fini de qualité et sans défaut.
                <img src="assets/img/qualibat.jpg" class="rounded mx-auto d-block" alt="Responsive">
              </p>
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>
<div class="mt-5">
<div class="embedresize">
<div>
<iframe allowfullscreen="" frameborder="0" height="315" src="assets/img/Agristandard-2016-mp4_12.mp4" width="700" sandbox></iframe>
</div>
</div>
</div>



<a id="button"></a>
<?php include ("assets/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="assets/js/text.js"></script>
  <script src="assets/js/back.js"></script>
</body>
</html>
