<?php
session_start();
$linkCss = '<link rel="stylesheet" href="../../css/index.css" />';
include_once '../partials/_header.php';
?>

<section>
    <h2>BIÈRES DU MOMENT</h2>
    <a href="./ficheproduit.php?id=6">
        <div class="imageBiereDuMoment imgInSlider">
            <span>La gamme de bière incontournable du moment</span>
        </div>
    </a>
</section>


<h2>Pourquoi avons-nous créé ce site?</h2>
<section class="section2">
    <div class="club"><p>Notre club est pensé comme un rassemblement de connaisseur désirant des bières artisanales
            françaises destinées à une communauté de connaisseurs et de gourmets. Nous recueillons leurs avis et nous en
            servons dans le référencement des bières afin de faire ressortir les meilleurs produits de la manière la
            plus objective possible. Nous prenons soin de sélectionner le meilleur de la bières afin de ravire les
            papilles de nos client et tenter de les enmener au 7 eme ciel de la bières tels des ambassadeurs de la
            sainte bière nous nous proposons de vous accompagner dans une épopée gustative transcendante afin de vous
            faire toucher du doigt(et de la langue) des merveilles confectionnées par des grands maitres brasseurs
            exclusifs affiliés à notre club.</p>
    </div>
    <p class="plaisir">Notre plaisir est le vôtre</p>


</section>
<h2>Nouveautés</h2>
<section class="nouveaute">
    <div class="imgNouveaute"></div>
    <div class="txtNouveaute">

        <span>
        gamme de bières
        de la brasserie
        Mélusine 
        Puy d’Enfer
        </span>

        <span>Profitez de notre offre découverte
          à<strong> 8.90€</strong>
        </span>

        <a href="./ficheproduit.php?id=9">Voir plus</a>

    </div>

</section>
<h2>Promotions</h2>
<section class="promotions">
    <a href="./ficheproduit.php?id=7">
        <article class="promoCard">
            <img src="../../triple_karmelite.jpg">
            <div class="textPromoCard">
                <h3 style="text-align:center ;">Triple Karmeliet</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem recusandae, nesciunt voluptates fuga
                    <span>voir plus...</span></p>
                <div>
                    <div><span>30€</span><span style="color: red;">-50%</span></div>
                    <span>15€ TTC</span>
                </div>
            </div>
        </article>
    </a>
    <article></article>
    <article></article>
    <article></article>
    <article></article>

</section>

<section>
    <h2>Choix des utilisateurs</h2>
    <a href="./ficheproduit.php?id=10">
    <div class="imgChoiceUsers imgInSlider ">
        <div class="textPubChxUser">
            <span>la bière la plus appreciée de nos utilisateurs</span>
            <div>
                <span>A partir de :<span>59.99€</span> </span>

            </div>

        </div>

        <div id="prixChxUser"></div>

    </div>
    </a>

</section>

<footer></footer>

</body>

</head>
<body>

<?php include_once '../partials/_footer.php' ?>

