<?php
session_start();
require '../../../vendor/autoload.php';

use App\models\User;
use App\repositery\UserRepositery;

if (!empty($_POST) ) {
    $userRepositery = new UserRepositery();
    $user = $userRepositery->findOneBy($_POST['email']);
    if ($user != false && $user->getEmail() === $_POST['email']) {
        if (password_verify($_POST['passwords'], $user->getPasswords())) {
            $_SESSION['user'] = $user->getEmail();
            $isValid = true;
            header('location: ./index.php');
        }else{
            $isValid = false;
        }
    }
}

$linkCss = '<link rel="stylesheet" href="../../css/login.css" />';
include_once '../partials/_header.php';

?>
<section class="container-login">
    <form class="login" method="post" action="">
        <h2>Connexion</h2>
        <?php if (isset($user) && $user === false || isset($isValid) && $isValid === false){ ?>
        <p class="text-center text-danger">Identifiants Invalides</p>
        <?php } ?>
        <div class="w-100">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email"/>

        </div>
        <div class="w-100">
            <label for="passwords">Mot de passe</label>
            <input type="password" id="passwords" name="passwords"/>
        </div>
        <div>
            <input type="submit" value="Se connecter"/>
            <a href="">Mot de passe oublié</a>
        </div>
    </form>
</section>
<?php
include_once '../partials/_footer.php';


?>
