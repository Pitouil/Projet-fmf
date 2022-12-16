<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
      defer
    ></script>
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <link rel="stylesheet" href="./assets/css/register.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="">
        <img src="../assets/logo-decouper.png" alt="Logo du site" />
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
          <div class="container-fluid">
            <button
              class="navbar-toggler"
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
              class="collapse navbar-collapse h-100"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav h-100 w-25 me-auto mb-2 mb-lg-0">
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
              <ul class="navbar-nav h-100 w-25 me-auto mb-2 mb-lg-0">
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
                    <li>
                      <a class="dropdown-item" href="#">Douces & fruitée</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Fumée</a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="#">Houblonnée</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"
                        >Légère & Désaltérante</a
                      >
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
              <ul class="navbar-nav h-100 w-25 me-auto mb-2 mb-lg-0">
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
              <ul class="navbar-nav h-100 w-25 me-auto mb-2 mb-lg-0">
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
                    <li>
                      <a class="dropdown-item" href="#">Sans alcool (<1.2%)</a>
                    </li>
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
        <a href="#">Panier</a>
      </div>
    </header>
    <section class="container-login">
      <form method="post" action="" class="register">
        <h2>Inscription</h2>
        <div class="align">
          <div class="register-first-line">
            <span>Sexe : </span>
            <div>
              <label for="male">H</label>
              <input type="radio" name="sexe" id="male" />
            </div>
            <div>
              <label for="female">F</label>
              <input type="radio" name="sexe" id="female" />
            </div>
            <div>
              <label for="date-of-birth">Date de naissance :</label>
              <input type="date" name="date-of-birth" id="date-of-birth" />
            </div>
          </div>
          <div class="register-second-line">
            <div>
              <label for="lastname">Nom :</label>
              <input type="text" name="lastname" id="lastname" />
            </div>
            <div>
              <label for="firstname">Prénom :</label>
              <input type="text" name="firstname" id="firstname" />
            </div>
          </div>
          <div class="email-line">
            <label for="email">E-mail :</label>
            <input type="email" name="email" id="email" />
          </div>
          <div class="adress-line">
            <label for="adress">Adresse :</label>
            <input type="text" name="adress" id="adress" />
          </div>
          <div class="second-adress-line">
            <div>
              <label for="zip-code">Code postale :</label>
              <input type="text" name="zip-code" id="zip-code" />
            </div>
            <div>
              <label for="city">Ville :</label>
              <input type="text" name="city" id="city" />
            </div>
          </div>
          <div class="phone-number">
            <label for="phone-number">N° Téléphone :</label>
            <input type="text" name="phone-number" id="phone-number" />
          </div>
          <div class="valid-check">
            <div>
              <input type="checkbox" name="mention" id="mention" />
              <label for="mention">J'accepte les mentions légales</label>
            </div>
            <div>
              <input type="checkbox" name="newsletter" id="newsletter" />
              <label for="newsletter"
                >Je souscris à la newsletter du site</label
              >
            </div>
            <div>
              <input type="checkbox" name="promotion" id="promotion" />
              <label for="promotion"
                >J'accepte de recevoir les promotions</label
              >
            </div>
          </div>
          <div class="submit-valid">
<input type="submit" value="Je valide avec mon sang">
          </div>
        </div>
      </form>
    </section>
  </body>
</html>
