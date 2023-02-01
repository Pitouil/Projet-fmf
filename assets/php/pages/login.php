<?php
require '../../../vendor/autoload.php';

use App\repositery\UserRepositery;

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
          <label for="passwords">Mot de passe</label>
          <input type="password" id="passwords" name="passwords" />
        </div>
        <div>
          <input type="submit" value="Se connecter" />
          <a href="">Mot de passe oublié</a>
            <?php $userRepositery = new UserRepositery();
            dump($userRepositery->findAll());
            $allUsers = $userRepositery->findAll();
            foreach ($allUsers as $user){
                if ($user['email'] === $_POST['email']){
                    if ($user['passwords'] === $_POST['passwords']){
                        $_SESSION = $user;
                    }else{?>

                        <p>Mauvais Mot de passe</p>
                    <?php }
                }else{?>
                   <p>Mauvais Email</p>
                <?php }
            }

            ?>
        </div>
      </form>
    </section>
<?php include_once '../partials/_footer.php'?>
