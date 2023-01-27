<?php
$linkCss = '<link rel="stylesheet" href="../../css/login.css" />';
include_once '../partials/_header.php';
?>
    <section class="container-login">
      <form class="login" method="post" action="">
        <h2>Connexion</h2>
        <div class="w-100">
          <label for="email">E-mail</label>
          <input type="text" id="email" name="email" />
        </div>
        <div class="w-100">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" name="password" />
        </div>
        <div>
          <input type="submit" value="Se connecter" />
          <a href="">Mot de passe oublié</a>
        </div>
      </form>
    </section>
<?php include_once '../partials/_footer.php'?>
