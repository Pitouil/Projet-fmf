<?php
$linkCss = '<link rel="stylesheet" href="../../css/boutique.css" />';
include_once '../partials/_header.php';

$tabTest = [1,2,3,4,5,6,7,8,9]
?>
    <section class="boutique">
      <div class="filter">
        <form method="get" >
          <div>
            <label for="ambree"> Ambrée </label>
            <input type="checkbox" value="Ambree" id="ambree" />
          </div>
          <div>
            <label for="brune"> Brune </label>
            <input type="checkbox" value="brune" id="brune" />
          </div>
          <div>
            <label for="blonde"> Blonde </label>
            <input type="checkbox" value="blonde" id="blonde" />
          </div>
          <div>
            <label for="blanche"> Blanche </label>
            <input type="checkbox" value="blanche" id="blanche" />
          </div>
          <div>
            <label for="noir"> Noir </label>
            <input type="checkbox" value="noir" id="noir" />
          </div>
          <div>
            <label for="rouge"> Rouge </label>
            <input type="checkbox" value="rouge" id="rouge" />
          </div>
          <div>
            <label for="autre"> Autre </label>
            <input type="checkbox" value="autre" id="autre" />
          </div>
          <div>
            <label for="douce"> Douces & Fruitée </label>
            <input type="checkbox" value="douce" id="douce" />
          </div>
          <div>
            <label for="fumee"> Fumée </label>
            <input type="checkbox" value="fumee" id="fumee" />
          </div>
          <div>
            <label for="houblon"> Houblonnée </label>
            <input type="checkbox" value="houblon" id="houblon" />
          </div>
          <div>
            <label for="legere"> Légère & Désaltérante </label>
            <input type="checkbox" value="legere" id="legere" />
          </div>
          <div>
            <label for="riche"> Riche & Épicée </label>
            <input type="checkbox" value="riche" id="riche" />
          </div>
          <div>
            <label for="sucree"> Sucrée & Parfumée </label>
            <input type="checkbox" value="sucree" id="sucree" />
          </div>
          <div>
            <label for="vive"> Vive & Acidulé" </label>
            <input type="checkbox" value="vive" id="vive" />
          </div>
          <div>
            <label for="ipa"> IPA </label>
            <input type="checkbox" value="ipa" id="ipa" />
          </div>
          <div>
            <label for="lambic"> Lambic </label>
            <input type="checkbox" value="lambic" id="lambic" />
          </div>
          <div>
            <label for="pils"> Pils </label>
            <input type="checkbox" value="pils" id="pils" />
          </div>
          <div>
            <label for="saison"> Saison </label>
            <input type="checkbox" value="saison" id="saison" />
          </div>
          <div>
            <label for="sour"> Sour </label>
            <input type="checkbox" value="sour" id="sour" />
          </div>
          <div>
            <label for="stout"> Stout </label>
            <input type="checkbox" value="stout" id="stout" />
          </div>
          <div>
            <label for="triple"> Triple </label>
            <input type="checkbox" value="triple" id="triple" />
          </div>
          <div>
            <label for="weisbier"> Weisbier </label>
            <input type="checkbox" value="weisbier" id="weisbier" />
          </div>
          <div>
            <label for="witbier"> Witbier </label>
            <input type="checkbox" value="witbier" id="witbier" />
          </div>
          <div>
            <label for="sans"> Sans Alcool (>1.2%) </label>
            <input type="checkbox" value="sans" id="sans" />
          </div>
          <div>
            <label for="moins"> Moins de 5% </label>
            <input type="checkbox" value="moins" id="moins" />
          </div>
          <div>
            <label for="middle"> 5% à 8% </label>
            <input type="checkbox" value="middle" id="middle" />
          </div>
          <div>
            <label for="plus"> Plus de 8% </label>
            <input type="checkbox" value="plus" id="plus" />
          </div>
        </form>
      </div>
      <div class="list_card row">
          <?php foreach ($tabTest as $test){ ?>
        <div class="carde col-4 col-md-6 col-sm-12">
          <a href="">
            <div>
              <img src="assets/chouffe.jpg" alt="photo biere" />
            </div>
            <p class="bier_name"><?= $test ?>/p>
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
  </body>
</html>
