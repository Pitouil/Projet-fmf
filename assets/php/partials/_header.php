

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <script rel="script" href="../../scripts/main.js" defer></script>
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
    <?= $linkCss ?>
    <title>Document</title>
</head>
<body>
<div class="main-img">
    <img src="../../logo-decouper.png" alt="Logo du site" />
</div>
<header>
    <div class="">
        <img src="../../logo-primaire.png" alt="Logo du site" />
    </div>
    <div class="navbar-main">
        <!-- top-navbar a desactiver pour responsive mobile pour le collapse -->
        <div class="top-navbar">
            <div class="search-bar">

                <input
                    id="searchbar"
                    type="search"
                    name="search"
                    placeholder="Barre de recherche"
                />

            </div>
            <div class="connexion collapse">
                <a href="#">Connexion</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid h-100">
                <button
                    class="navbar-toggler "
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse w-50"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav h-100 w-100 me-auto mb-2 mb-lg-0">
                        <li class="w-100 h-100 nav-item dropdown">
                            <a
                                class="w-100 h-100 nav-link d-flex justify-content-center align-items-center"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Couleur
                            </a>
                            <ul
                                class="dropdown-menu w-100"
                                aria-labelledby="navbarDropdown"
                            >
                                <li><a class="dropdown-item" href="#">Ambrée</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Brune</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Blonde</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Blanche</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Noir</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Rouge</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Autre</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav h-100 w-100 me-auto mb-2 mb-lg-0">
                        <li class="w-100 h-100 nav-item dropdown">
                            <a
                                class="w-100 h-100 nav-link d-flex justify-content-center align-items-center"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Saveurs
                            </a>
                            <ul
                                class="dropdown-menu w-100"
                                aria-labelledby="navbarDropdown"
                            >
                                <li><a class="dropdown-item" href="#">Douces & fruitée</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Fumée</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Houblonnée</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Légère & Désaltérante</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Riche & Épicée</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Sucrée & Parfumée</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Vive & Aciduléz</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav h-100 w-100 me-auto mb-2 mb-lg-0">
                        <li class="w-100 h-100 nav-item dropdown">
                            <a
                                class="w-100 h-100 nav-link d-flex justify-content-center align-items-center"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Top Styles
                            </a>
                            <ul
                                class="dropdown-menu w-100"
                                aria-labelledby="navbarDropdown"
                            >
                                <li><a class="dropdown-item" href="#">IPA</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Lambic</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">Pils</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Saison</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Sour</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Stout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Triple</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Weisbier</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Witbier</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav h-100 w-100 me-auto mb-2 mb-lg-0">
                        <li class="w-100 h-100 nav-item dropdown">
                            <a
                                class="w-100 h-100 nav-link d-flex justify-content-center align-items-center"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Degrés D'Alcool
                            </a>
                            <ul
                                class="dropdown-menu w-100"
                                aria-labelledby="navbarDropdown"
                            >
                                <li><a class="dropdown-item" href="#">Sans alcool (<1.2%)</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Moins de 5%</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">5% à 8%</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Plus de 8%</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                        />
                        <button class="btn btn-outline-success" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="basket">
        <a href="" class="basket-login">Connexion</a>
        <a href="#">Panier</a>
    </div>
</header>
