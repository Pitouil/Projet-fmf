<?php
require '../../../vendor/autoload.php';

use App\models\Beers;
use App\models\Brand;
use App\models\Products;
use App\repositery\BeerRepositery;
use App\repositery\BrandRepositery;
use App\repositery\ProductRepositery;




$productRepositery = new ProductRepositery();
$beerRepositery = new BeerRepositery();
$brandRepositery = new BrandRepositery();



if (isset($_POST) && !empty($_POST)){
    $brand = new Brand();
    $product = new Products();
    $beer = new Beers();
    $brand->setName($_POST['brand']);
    $product->setName($_POST['name']);
    $product->setPrice($_POST['price']);
    $dateTime = new DateTime();
    $dateString = $dateTime->format('Y-m-d H:i:s');
    $product->setCreatedAt($dateString);
    $beer->setAlcohol($_POST['alcohol']);
    $beer->setColor($_POST['color']);
    $beer->setMainFlavor($_POST['mainFlavor']);
    $beer->setTopStyle($_POST['topStyles']);
    $beer->setContenance($_POST['contenance']);
    dump($beer);
    dump($product);
    dump($brand);
    $brandRepositery->addBrand($brand);
    $beerRepositery->addBeer($beer);
    $productRepositery->addProduct($product);

}







$linkCss = '<link rel="stylesheet" href="../../css/crudBeer.css" />';
include_once '../partials/_header.php';
$topStyles = ['IPA', 'Lambic', 'Pils', 'Saison', 'Sour', 'Stout', 'Triple', 'Weisbier', 'Witbier'];
$colors = ['Ambrée', 'Brune', 'Blonde', 'Blanche', 'Noir', 'Rouge', 'Autre'];
$mainFlavors = ['Douces & Fruitée', 'Fumée', 'Houblonneée', 'Légere & Désalterante', 'Riche & Epicée', 'Sucrée & Parfumée', 'Vive & Acidulée'];
$alcohols = ['Sans alcool (<1.2%)', 'Moins de 5%', '5% a 8%', 'Plus de 8%'];

?>
<div class="crud">
    <h1>Ajout de bières</h1>

    <form method="post">

        <div>
            <label for="topStyles">Top-Styles</label>
            <select id="topStyles" name="topStyles">
                <option value="">Sélectionner</option>
                <?php foreach ($topStyles as $topstyle) { ?>
                    <option value="<?= strtolower($topstyle) ?>"><?= $topstyle ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="color">Couleur</label>
            <select id="color" name="color">
                <option value="">Sélectionner</option>
                <?php foreach ($colors as $color) { ?>
                    <option value="<?= strtolower($color) ?>"><?= $color ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="mainFlavor">Saveur</label>
            <select id="mainFlavor" name="mainFlavor">
                <option value="">Sélectionner</option>
                <?php foreach ($mainFlavors as $mainFlavor) { ?>
                    <option value="<?= strtolower($mainFlavor) ?>"><?= $mainFlavor ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="alcohol">Degrée d'alcool</label>
            <select id="alcohol" name="alcohol">
                <option value="">Sélectionner</option>
                <?php foreach ($alcohols as $alcohol) { ?>
                    <option value="<?= strtolower($alcohol) ?>"><?= $alcohol ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="contenance">Contenance</label>
            <input type="number" id="contenance" name="contenance">
            <label for="contenance">cl</label>
        </div>
        <div>
            <label for="name">Nom de la bière</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="price">Prix</label>
            <input type="number" id="price" name="price">
        </div>
        <div>
            <label for="brand">Marque</label>
            <input type="text" id="brand" name="brand">
        </div>
        <div>
            <input type="submit" value="Ajouter">
        </div>

    </form>
</div>

<?php


include_once '../partials/_footer.php' ;
dump($_POST);?>
