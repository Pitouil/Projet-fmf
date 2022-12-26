<?php
$linkCss = '<link rel="stylesheet" href="../../css/cart.css" />';
include_once '../partials/_header.php';
?>


    <h1>Votre panier</h1>

    <div class="container ">
        <div class="row text-center bg-success">
          <div class="col-sm-4">
            Produit
          </div>
          <div class="col">
            Quantité
          </div>
          <div class="col">
            Prix unitaire
          </div>
          <div class="col">
            Prix total
          </div>
        </div>
        <div class="row text-center bg-success">
            <div class="col-sm-4 ">
                <article class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./assets/triple_karmelite.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </article>
            </div>
            <div class="col w-25">
              <input type="number" class="w-25">
            </div>
            <div class="col">
              Prix unitaire
            </div>
            <div class="col">
              Prix total
            </div>
          </div>
      </div>

<?php include_once '../partials/_footer.php'?>