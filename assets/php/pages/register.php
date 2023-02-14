<?php
session_start();
require '../../../vendor/autoload.php';

use App\models\User;
use App\repositery\UserRepositery;

$userRepositery = new UserRepositery();


if (isset($_POST) && !empty($_POST)) {
    $userMail = $userRepositery->findOneBy($_POST['email']);
    if (!empty($_POST['gender'])) {
        if (!empty($_POST['dateOfBirth'])) {
            if (!empty($_POST['lastName'] && strlen($_POST['lastName'] > 3))) {
                if (!empty($_POST['firstName'] && strlen($_POST['firstName'] > 3))) {
                    if (!empty($_POST['email'] && strlen($_POST['email'] > 6 && str_contains($_POST['email'], '@') && str_contains($_POST['email'], '.') && $userMail === false))) {
                        if (!empty($_POST['passwords']) && strlen($_POST['passwords'] > 7)) {
                            if (!empty($_POST['street'])) {
                                if (!empty($_POST['zipCode'])) {
                                    if (!empty($_POST['city'])) {
                                        if (!empty($_POST['phoneNumber'])) {
                                            if (!empty($_POST['mention'])) {
                                                $newUser = new User();
                                                $newUser->setLastName($_POST['lastName']);
                                                $newUser->setFirstName($_POST['firstName']);
                                                $newUser->setPasswords(password_hash($_POST['passwords'], PASSWORD_DEFAULT));
                                                $newUser->setCity($_POST['city']);
                                                $newUser->setZipCode($_POST['zipCode']);
                                                $newUser->setStreet($_POST['street']);
                                                $newUser->setEmail($_POST['email']);
                                                $newUser->setPhones($_POST['phoneNumber']);
                                                $newUser->setGender($_POST['gender']);
                                                $newUser->setDateOfbirth($_POST['dateOfBirth']);
                                                $dateTime = new DateTime();
                                                $dateString = $dateTime->format('Y-m-d H:i:s');
                                                $newUser->setCreatedAt($dateString);
                                                if (isset($_POST['mention'])) {
                                                    $_POST['mention'] = true;
                                                } else {
                                                    $_POST['mention'] = false;
                                                }
                                                $newUser->setMention($_POST['mention']);
                                                if (isset($_POST['newsletter'])) {
                                                    $_POST['newsletter'] = true;
                                                } else {
                                                    $_POST['newsletter'] = false;
                                                }
                                                $newUser->setNewsletter($_POST['newsletter']);
                                                if (isset($_POST['promotion'])) {
                                                    $_POST['promotion'] = true;
                                                } else {
                                                    $_POST['promotion'] = false;
                                                }
                                                $newUser->setPromotion($_POST['promotion']);

                                                $userRepositery->addUser($newUser);
                                                header('location: ./login.php');
                                            } else {
                                                $mentionMessage = 'Cocher la case pour accepter les mentions légales';
                                            }
                                        } else {
                                            $phoneNumberMessage = 'Entrer un numero de téléphone';
                                        }
                                    } else {
                                        $cityMessage = 'Entrer une ville';
                                    }
                                } else {
                                    $zipCodeMessage = 'Entrer un code postale';
                                }
                            } else {
                                $streetMessage = 'Entrer une rue';
                            }
                        } else {
                            $pwdMessage = 'Entrer un mot de passe';
                        }
                    } else if ($userMail) {
                        $emailMessage = 'E-mail existant';
                    } else {
                        $emailMessage = 'Entrer un E-mail';
                    }
                } else {
                    $firstNameMessage = 'Entrer un prénom';
                }
            } else {
                $lastNameMessage = 'Entrer un nom';
            }
        } else {
            $dateMessage = 'Selectionner date de naissance';
        }
    } else {
        $genreMessage = 'Sélectionner homme ou femme';
    }
}


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
                        <input type="radio" name="gender" id="male" value="Male"/>
                    </div>
                    <div>
                        <label for="female">Femme</label>
                        <input type="radio" name="gender" id="female" value="Female"/>
                    </div>
                    <p class="text-center red-alert"><?= isset($genreMessage) ? $genreMessage : '' ?> </p>
                </div>
                <div class="date-register">
                    <label for="date-of-birth">Date de naissance :</label>
                    <input type="date" name="dateOfBirth" id="date-of-birth" class="w-100 date-register" required/>
                    <p class="text-center red-alert"><?= isset($dateMessage) ? $dateMessage : '' ?> </p>
                </div>
            </div>
            <div class="register-second-line">
                <div>
                    <label for="lastname">Nom :</label>
                    <input type="text" name="lastName" id="lastname" class="w-100" required/>
                    <p class="text-center red-alert"><?= isset($lastNameMessage) ? $lastNameMessage : '' ?> </p>
                </div>
                <div>
                    <label for="firstname">Prénom :</label>
                    <input type="text" name="firstName" id="firstname" class="w-100" required/>
                    <p class="text-center red-alert"><?= isset($firstNameMessage) ? $firstNameMessage : '' ?> </p>
                </div>
            </div>
            <div class="email-line">
                <label for="email">E-mail :</label>
                <input type="email" name="email" id="email" class="w-100" required/>
                <p class="text-center red-alert"><?= isset($emailMessage) ? $emailMessage : '' ?> </p>
            </div>
            <div class="email-line">
                <label for="passwords">Mot de passe :</label>
                <input type="password" name="passwords" id="passwords" class="w-100" required/>
                <p class="text-center red-alert"><?= isset($pwdMessage) ? $pwdMessage : '' ?> </p>
            </div>
            <div class="adress-line">
                <label for="street">Adresse :</label>
                <input type="text" name="street" id="street" class="w-100" required/>
                <p class="text-center red-alert"><?= isset($streetMessage) ? $streetMessage : '' ?> </p>
            </div>
            <div class="second-adress-line">

                <div class="w-100">
                    <label for="zip-code">Code postale :</label>
                    <input type="text" name="zipCode" id="zip-code" class="w-100" required/>
                    <p class="text-center red-alert"><?= isset($zipCodeMessage) ? $zipCodeMessage : '' ?> </p>
                </div>
                <div class="w-100">
                    <label for="city">Ville :</label>
                    <input type="text" name="city" id="city" class="w-100" required/>
                    <p class="text-center red-alert"><?= isset($cityMessage) ? $cityMessage : '' ?> </p>
                </div>

            </div>
            <div class="phone-number">
                <label for="phone-number">N° Téléphone :</label>
                <input type="text" name="phoneNumber" id="phone-number" class="w-100" required/>
                <p class="text-center red-alert"><?= isset($phoneNumberMessage) ? $phoneNumberMessage : '' ?> </p>
            </div>
            <div class="valid-check">
                <div>
                    <input type="checkbox" name="mention" id="mention" required/>
                    <label for="mention">J'accepte les mentions légales</label>
                    <span class="text-center red-alert"><?= isset($mentionMessage) ? $mentionMessage : '' ?> </span>
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


include_once '../partials/_footer.php' ?>
