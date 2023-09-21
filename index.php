<!-- 
nome repo: php-oop-2

Immaginare quali sono le classi necessarie per creare uno shop online 
con le seguenti caratteristiche:
  - L’e-commerce vende prodotti per animali.
  - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
  - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, 
titolo, prezzo, icona della categoria ed il tipo di articolo 
che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Allego un idea di come si potrebbero strutturare le classi.

-->

<?php
require_once __DIR__ . './models/shop/Categoria.php';
require_once __DIR__ . './models/shop/Cani.php';
require_once __DIR__ . './models/shop/Gatti.php';

require_once __DIR__ . './models/shop/Prodotto.php';
require_once __DIR__ . './models/shop/Cibo.php';
require_once __DIR__ . './models/shop/Gioco.php';
require_once __DIR__ . './models/shop/Cuccia.php';

var_dump(new Cani());
var_dump(new Gatti());
// var_dump(new Categoria("Pesci", "pesce.svg"));

// var_dump(new Prodotto("Cibo per cani", "Cibo per cani", 10, new Cani()));
var_dump(new Cibo("Cibo per gatti", "Cibo per gatti gourmet", 6.30 , new Gatti()));
var_dump(new Gioco("Palla rotonda", "palla di 20cm di diametro", 2.61 , new Gatti()));
var_dump(new Cuccia("Cuccia domus", "cuccia in legno per esterni", 269.99 , new Cani()));
var_dump(new Cuccia("Cuccia zampa", "cuccia in pile per interni", 29.99 , new Gatti()));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- THIRD PARTY LIBRARIES -->
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- My css link -->
  <link rel="stylesheet" href="./style.css">
  <title>PHP | OOP-2</title>
</head>
<body>
  <div class="container-fluid py-4 bg-light">
    <div class="row justify-content-center">
      <div class="col-12 d-flex flex-column mx-auto">
        <div class="col d-flex flex-column justify-content-start mb-2 ms-3">
          <a href="#">
            <img src="./imgs/vuejs-logo.png" alt="" width="60" height="45">
          </a>
        </div>
        <div class="row row-cols-3 bg-success bg-opacity-50 g-5 mt-3 pb-5">
          
          <div class="col d-flex flex-column justify-content-center align-items-center text-center">
            <?php 
              // foreach ($movies as $movie) {

              // };
            ?>
            <div class="card bg-dark bg-opacity-25" style="height: 420px; width: 351px;">
              <div class="card-img-top py-4 d-flex flex-column justify-content-center align-items-center">
                <img src="immagine" alt="-" style="width: 250px; height: 250px;">
              </div>
              <div class="card-body">
                <h5 class="card-title text-white">{{ titolo }}</h5>
                <h6 class="card-text text-light fw-light">{{ prezzo }}</h6>
                <h5 class="card-text text-white"><small>{{ categoria }}</small></h5>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
</body>
</html>