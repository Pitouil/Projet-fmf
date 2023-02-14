<?php
require '../../../vendor/autoload.php';



use App\models\Users;
use App\repositery\UserRepositery;


$connard=new UserRepositery();
var_dump($connard->omniFilter("user",["first_name"=>"6"],["OR"]));