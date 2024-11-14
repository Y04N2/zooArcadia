<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="asset/css/index.css">
   <link href="asset/lib/bootstrap.min.css" rel="stylesheet">
   <title>Zoo Arcadia</title>
</head>
<header>

   <!--logo/nav-->

   <nav class="container-fluid d-flex justify-content-between align-items-center">
      <div>
         <img src="asset/picture/logo.svg" alt="Logo Zoo Arcadia">
      </div>
      <div>
         <h1 class="titreCentral">ZOO ARCADIA</h1>
      </div>
      <button>
         <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
         </svg>
         
      </button>
   </nav>
</header>

<body>
   <!--carousel-->

   <div id="carouselIndicators" class="carousel slide">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="/asset/picture/Animaux/LION/lion5.jpg" class="d-block w-100 carousel-image" alt="Lion">
         </div>
         <div class="carousel-item">
            <img src="/asset/picture/Animaux/RAPACE/chouettedesneige1.jpg" class="d-block w-100 carousel-image" alt="Chouette des neige">
         </div>
         <div class="carousel-item">
            <img src="/asset/picture/Animaux/LOUP/loup5.jpg" class="d-block w-100 carousel-image" alt="Loup">
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>

   <!--card avec header et image dans le header-->
   <div class="container-fluid"><!--div pour les chevrons ou bar de defilement-->
      <div class="card mb-3" style="width: 18rem;">
         <div class="card-body">
            <img class="img-profile" src="/asset/picture/profiles/profile1.jpg">
            <p class="publication-date">Publié le 10/06/2024</p>
            <h5 class="card-title">Incroyable </h5>
            <p class="card-text">Je tiens à exprimer ma profonde satisfaction concernant le zoo que j'ai récemment visité. L'expérience a été tout simplement super !</p>

         </div>
      </div>

      <div class="card mb-3" style="width: 18rem;">
         <div class="card-body">
            <img class="img-profile" src="/asset/picture/profiles/karsten.jpg">
            <p class="publication-date">Publié le 18/09/2024</p>
            <h5 class="card-title">Genial</h5>
            <p class="card-text">L'organisation du zoo est impeccable, ce qui rend la visite à la fois agréable et instructive. </p>

         </div>
      </div>

      <div class="card mb-3" style="width: 18rem;">
         <div class="card-body">
            <img class="img-profile" src="/asset/picture/profiles/adrien-lopes.jpg">
            <p class="publication-date">Publié le 01/08/2024</p>
            <h5 class="card-title">Super</h5>
            <p class="card-text">Visiter le zoo a été une expérience tout simplement géniale ! Dès notre arrivée, nous avons été accueillis par une ambiance joyeuse et animée.</p>

         </div>
      </div>
   </div>

<!--Blocs des services-->
<div class="b-service mb-3 container-fluid d-flex justify-content-between"><!--alignement du bloc bleu-->

</div>
   <script type="text/javascript" src="asset/lib/bootstrap.min.js"></script>
</body>

</html>