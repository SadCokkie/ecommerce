<?php 

session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;


$app = new \Slim\Slim();

$app->config('debug', true);

require_once("site.php");
require_once("admin.php");
require_once("categories-admin.php");
require_once("users-admin.php");
require_once("products-admin.php");

$app->run();

 ?>