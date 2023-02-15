<?php
require '../../../vendor/autoload.php';



use App\models\Users;
use App\repositery\UserRepositery;
use App\models\Products;
use App\repositery\ProductRepositery;

$connard=new ProductRepositery();
var_dump($connard->omniFilter("product",["id"],["3"],[],["beers","brand"]));