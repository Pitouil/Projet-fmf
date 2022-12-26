<?php
$linkCss = '<link rel="stylesheet" href="../../css/boutique.css" />';
include_once '../partials/_header.php';

$tabTest = [1, 2, 3, 4, 5, 6, 7, 8, 9]
?>
    <section class="boutique">
        <div class="filter">
            <form method="get">
                <div class="dropdown">
                    <p class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Filtres
                    </p>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><label for="ambree"> Ambrée </label>
                            <input type="checkbox" value="Ambree" id="ambree"/></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </form>
        </div>
        <div class="list_card row">
            <?php foreach ($tabTest as $test) { ?>
                <div class="carde ">
                    <a href="">

                        <img src="../../../assets/chouffe.jpg" alt="photo biere"/>

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
<?php include_once '../partials/_footer.php' ?>