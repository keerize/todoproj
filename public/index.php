<?php 
namespace main;
use main\controller\controller;
use main\router as router;

require_once(__DIR__."/../vendor/autoload.php");

$router = new router;

$router->get("/mainpage",[controller::class,"index"]);
$router->post("/mainpage",[controller::class,"index"]);

$router->get("/",[controller::class,"index"]);
$router->post("/",[controller::class,"index"]);


$router->get("/check",[controller::class,"check"]);
$router->post("/check",[controller::class,"check"]);

$router->get("/create",[controller::class,"create"]);
$router->post("/create",[controller::class,"create"]);

$router->resolve();



?>