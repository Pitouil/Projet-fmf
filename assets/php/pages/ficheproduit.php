<?php

use App\repositery\BeerRepositery;
use App\repositery\BrandRepositery;
use App\repositery\ProductRepositery;

session_start();
require '../../../vendor/autoload.php';

$productRepositery = new ProductRepositery();
$beerRepositery = new BeerRepositery();
$brandRepositery = new BrandRepositery();
$product = $productRepositery->findOneById($_GET['id']);
$beer = $beerRepositery->findOneById($product->getBeersId());
$brand = $brandRepositery->findOneById($product->getBrandId());

$linkCss = '<link rel="stylesheet" href="../../css/produit.css" />';
include_once '../partials/_header.php';
?>

<body>
    <div class="descriptionproduit">
        <div class="photoproduit"><img src="../../chouffe.jpg"></div>
        <div class="caracteristiques">
            <h2><?= $brand->getName() ?></h2>
            <p><?= $product->getDescription() ?> </p>
            <p>Categories:<?= ' '.$beer->getMainFlavor().' / '.$beer->getTopStyle().' / '.$beer->getColor() ?></p>
            <p>Degré d'alcool:<?= ' '.($beer->getAlcohol()/10).' %' ?></p>
            <p>Contenance:<?= ' '.$beer->getContenance().' cl.' ?></p>
            <p class="text-center">Prix:<?= ' '.($product->getPrice()/100).' €' ?></p>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide  h-500" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../chimay.jpg" class="d-block w-100 chimay" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../chimay.jpg" class="d-block w-100 img-fluid" alt="..." style="height: 500px">
            </div>
            <div class="carousel-item">
                <img src="../../chimay.jpg" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../chimay.jpg" class="d-block w-100 " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="ongletsavis">
        <div class="avisbiere">Avis</div>
        <div class="tridesavis">Tri des avis</div>
    </div>
    <div class="containeravis">
        <div class="avispasverifies">
            <div class="nometoiles">
                <div class="userstars">
                    <h2>Dupond A. le 07/12/2021</h2>
                    <div class="stars">
                        <div class="rating">
                            <div class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FEB600" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FEB600 " class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FEB600 " class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FEB600 " class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quidem ex nulla quas ducimus repellendus quasi sequi excepturi. Similique ipsum hic quaerat accusantium nemo a asperiores omnis at. Sequi, iure.</p>
        </div>
        <div class="avispasverifies">
            <div class="nometoiles">
                <div class="userstars">
                    <h2>Martin P. le 25/12/2021</h2>
                    <div class="stars">
                        <div class="rating">
                            <div class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FEB600" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FEB600 " class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FEB600 " class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FEB600 " class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>

                            </div>

                        </div>


                    </div>
                </div>

            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quidem ex nulla quas ducimus repellendus quasi sequi excepturi. Similique ipsum hic quaerat accusantium nemo a asperiores omnis at. Sequi, iure.</p>
        </div>
    </div>
    </div>


    <?php include_once '../partials/_footer.php' ?>




















</body>

</html>