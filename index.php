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
   
   <script type="text/javascript" src="asset/lib/bootstrap.min.js"></script>
</body>

</html>