<?php
$linkCss = '<link rel="stylesheet" href="../../css/user.css" />';
include_once '../partials/_header.php';
?>
    <section class="profil">
      <h2>Mon Profil</h2>
      <div class="user">
        <div class="profilPhoto">
          <img src="./assets/luffy-photo-profil.jpeg" alt="Photo de profil" />
        </div>
        <div class="userDetail">
          <div class="name">
            <p>NOM</p>
            <p>Prénom</p>
          </div>
          <p>Date de naissance</p>
          <p>Téléphone</p>
          <p>Mail</p>
          <p>Adresse</p>
        </div>
      </div>
    </section>
    <section class="delivery">
      <h2>Mes Commandes</h2>
      <div class="table-delivery">
        <table>
          <tr>
            <th>Commande N° XXXXXXXXXXXX</th>
          </tr>
          <tr>
            <th>Commande N° XXXXXXXXXXXX</th>
          </tr>
          <tr>
            <th>Commande N° XXXXXXXXXXXX</th>
          </tr>
        </table>
      </div>
      <a href="">Voir plus</a>
      <div class="delivery-detail">
        <p>Récapitulatif de la commande</p>
      </div>
    </section>
    <section class="delivery">
      <h2>Mes Tickets</h2>
      <div class="table-delivery">
        <table>
          <tr>
            <th>Ticket N° XXXXXXXXXXXX</th>
          </tr>
          <tr>
            <th>Ticket N° XXXXXXXXXXXX</th>
          </tr>
          <tr>
            <th>Ticket N° XXXXXXXXXXXX</th>
          </tr>
        </table>
      </div>
      <a href="">Voir plus</a>
      <div class="delivery-detail">
        <p>Récapitulatif des tickets</p>
      </div>
    </section>
<?php include_once '../partials/_footer.php'?>
