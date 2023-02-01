<?php
require '../../../vendor/autoload.php';

use App\models\Users;
use App\repositery\UserRepositery;


$linkCss = '<link rel="stylesheet" href="../../css/register.css" />';
include_once '../partials/_header.php';


?>
<section class="container-login">
    <form method="post" action="" class="register">
        <h2>Inscription</h2>
        <div class="align">
            <div class="register-first-line">

                <div class="none">
                    <div>
                        <label for="male">Homme</label>
                        <input type="radio" name="sexe" id="male"/>
                    </div>
                    <div>
                        <label for="female">Femme</label>
                        <input type="radio" name="sexe" id="female"/>
                    </div>
                </div>
                <div>
                    <label for="date-of-birth">Date de naissance :</label>
                    <input type="date" name="dateOfBirth" id="date-of-birth" class="w-100"/>
                </div>
            </div>
            <div class="register-second-line">
                <div>
                    <label for="lastname">Nom :</label>
                    <input type="text" name="lastName" id="lastname" class="w-100"/>
                </div>
                <div>
                    <label for="firstname">Prénom :</label>
                    <input type="text" name="firstName" id="firstname" class="w-100"/>
                </div>
            </div>
            <div class="email-line">
                <label for="email">E-mail :</label>
                <input type="email" name="email" id="email" class="w-100"/>
            </div>
            <div class="email-line">
                <label for="passwords">Mot de passe :</label>
                <input type="password" name="passwords" id="passwords" class="w-100"/>
            </div>
            <div class="adress-line">
                <label for="street">Adresse :</label>
                <input type="text" name="street" id="street" class="w-100"/>
            </div>
            <div class="second-adress-line">

                    <div class="w-100">
                        <label for="zip-code">Code postale :</label>
                        <input type="text" name="zipCode" id="zip-code" class="w-100"/>
                    </div>
                    <div class="w-100">
                        <label for="city">Ville :</label>
                        <input type="text" name="city" id="city" class="w-100"/>
                    </div>

            </div>
            <div class="phone-number">
                <label for="phone-number">N° Téléphone :</label>
                <input type="text" name="phoneNumber" id="phone-number" class="w-100"/>
            </div>
            <div class="valid-check">
                <div>
                    <input type="checkbox" name="mention" id="mention"/>
                    <label for="mention">J'accepte les mentions légales</label>
                </div>
                <div>
                    <input type="checkbox" name="newsletter" id="newsletter"/>
                    <label for="newsletter"
                    >Je souscris à la newsletter du site</label
                    >
                </div>
                <div>
                    <input type="checkbox" name="promotion" id="promotion"/>
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
<?php
dump($_POST);
$newUser = new Users();

$newUser->setLastName($_POST['lastName']);
$newUser->setFirstName($_POST['firstName']);
$newUser->setPasswords($_POST['passwords']);
$newUser->setCity($_POST['city']);
$newUser->setZipCode($_POST['zipCode']);
$newUser->setStreet($_POST['street']);
$newUser->setEmail($_POST['email']);
dump($newUser);
$userRepositery = new UserRepositery();

$userRepositery->addUser($newUser);
include_once '../partials/_footer.php' ?>
