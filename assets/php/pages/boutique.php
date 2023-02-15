<?php
session_start();
 require '../../../vendor/autoload.php';
use App\repositery\BeerRepositery;
$linkCss = '<link rel="stylesheet" href="../../css/boutique.css" />';
include_once '../partials/_header.php';

$beers= new BeerRepositery();
$tabTest = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arrayOperator = [];
$arrayFilterColumn = [];
$arrayFilterValue = [];

?>
<section class="boutique">
    <div class="filter">
        <form method="post">
            <hr>
            <h2>Couleur</h2>
            <hr>
            <div>
                <label for="Ambree"> Ambrée </label>
                <input type="checkbox" value="Ambree" name="color0" id="ambree"/>
            </div>
            <div>
                <label for="Brune"> Brune </label>
                <input type="checkbox" value="Brune" name="color1" id="brune"/>
            </div>
            <div>
                <label for="Blonde"> Blonde </label>
                <input type="checkbox" value="Blonde" name="color2" id="blonde"/>
            </div>
            <div>
                <label for="Blanche"> Blanche </label>
                <input type="checkbox" value="Blanche" name="color3" id="blanche"/>
            </div>
            <div>
                <label for="Noir"> Noire </label>
                <input type="checkbox" value="Noire" name="color4" id="Noire"/>
            </div>
            <div>
                <label for="Rouge"> Rouge </label>
                <input type="checkbox" value="Rouge" name="color5" id="Rouge"/>
            </div>
            <div>
                <label for="Autre"> Autre </label>
                <input type="checkbox" value="Autre" name="color6" id="autre"/>
            </div>
            <hr>
            <h2>Saveurs</h2>
            <hr>
            <div>
                <label for="douce"> Douces & Fruitée </label>
                <input type="checkbox" value="Douce et Fruitée" name="main_flavor0" id="douce"/>
            </div>
            <div>
                <label for="Fumée"> Fumée </label>
                <input type="checkbox" value="Fumée" name="main_flavor1" id="fumee"/>
            </div>
            <div>
                <label for="houblon"> Houblonnée </label>
                <input type="checkbox" value="Houblonnée" name="main_flavor2" id="houblon"/>
            </div>
            <div>
                <label for="legere"> Légère & Désaltérante </label>
                <input type="checkbox" value="Légère & Désaltérante" name="main_flavor3" id="legere"/>
            </div>
            <div>
                <label for="riche"> Riche & Épicée </label>
                <input type="checkbox" value="Riche & Épicée" name="main_flavor4" id="riche"/>
            </div>
            <div>
                <label for="sucree"> Sucrée & Parfumée </label>
                <input type="checkbox" value="Sucrée & Parfumée" name="main_flavor5" id="sucree"/>
            </div>
            <div>
                <label for="vive"> Vive & Acidulée" </label>
                <input type="checkbox" value="Vive & Acidulée" name="main_flavor6" id="vive"/>
            </div>
            <hr>
            <h2>Top Styles</h2>
            <hr>
            <div>
                <label for="ipa"> IPA </label>
                <input type="checkbox" value="IPA" name="top_style0" id="ipa"/>
            </div>
            <div>
                <label for="lambic"> Lambic </label>
                <input type="checkbox" value="Lambic" name="top_style1" id="lambic"/>
            </div>
            <div>
                <label for="pils"> Pils </label>
                <input type="checkbox" value="Pils" name="top_style2" id="pils"/>
            </div>
            <div>
                <label for="saison"> Saison </label>
                <input type="checkbox" value="Saison" name="top_style3" id="saison"/>
            </div>
            <div>
                <label for="sour"> Sour </label>
                <input type="checkbox" value="Sour" name="top_style4" id="sour"/>
            </div>
            <div>
                <label for="stout"> Stout </label>
                <input type="checkbox" value="Stout" name="top_style5" id="stout"/>
            </div>
            <div>
                <label for="triple"> Triple </label>
                <input type="checkbox" value="Triple" name="top_style6" id="triple"/>
            </div>
            <div>
                <label for="weisbier"> Weisbier </label>
                <input type="checkbox" value="Weisbier" name="top_style7" id="weisbier"/>
            </div>
            <div>
                <label for="witbier"> Witbier </label>
                <input type="checkbox" value="Witbier" name="top_style8" id="witbier"/>
            </div>
            <hr>
            <h2>Taux d'alcool</h2>
            <hr>
            <div>
                <label for="sans"> Sans Alcool (>1.2%) </label>
                <input type="checkbox" value="sans" name="alcohol0" id="sans"/>
            </div>
            <div>
                <label for="moins"> Moins de 5% </label>
                <input type="checkbox" value="moins" name="alcohol1" id="moins"/>
            </div>
            <div>
                <label for="middle"> 5% à 8% </label>
                <input type="checkbox" value="medium" name="alcohol2" id="middle"/>
            </div>
            <div>
                <label for="plus"> Plus de 8% </label>
                <input type="checkbox" value="plus" name="alcohol3" id="plus"/>
            </div>
            <hr>
            <button type="submit">Appliquer les filtres</button>
        </form>
    </div>
    <?php
    if (isset($_POST)) {
        foreach ($_POST as $column => $value) {
            $column = substr($column, 0, -1);
            $arrayFilterColumn[] = $column;
            $arrayFilterValue[] = $value;
        }
    }
    if (count($arrayFilterColumn) > 1) {
        $compare = "";
        foreach ($arrayFilterColumn as $column) {
            if ($compare != "" and $compare !== $column) {
                $arrayOperator[] = "AND";
            }
            elseif( $compare == $column  ){
                $arrayOperator[]= "OR";
            }
            $compare=$column;
        }
    }
$beers->omniFilter("products",$arrayFilterColumn,$arrayFilterValue,$arrayOperator,["beers","brand"]);
    dump($beers->omniFilter("products",$arrayFilterColumn,$arrayFilterValue,$arrayOperator,["beers","brand"]));
    ?>

    <div class="list_card row">
        <?php foreach ($beers as $beer) { ?>
            <div class="carde ">
                <a href="">

                    <img src="../../../assets/chouffe.jpg" alt="photo biere"/>

                    <p class="bier_name"><?= $beer->getName ?></p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                        exercitationem consectetur voluptas aliquam non? Perferendis natus
                        similique omnis ab obcaecati.
                    </p>
                    <p class="price_bier">99.99€</p>
                </a>
            </div>
        <?php } ?>
    </div>
</section>
<section class="page">
    <a href="">1</a>
    <a href="">2</a>
    <a href="">3</a>
</section>
<?php include_once '../partials/_footer.php' ?>
