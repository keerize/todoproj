<?php 
namespace main\controller;

use main\database;
use main\router;


 class controller{

     


public function index(router $router){
  if($_SERVER["REQUEST_METHOD"]=="GET"){
    $data=$_GET['data']??date("Y-m-d");
    $list=$router->database->showtodo('',$data);   
    $router->renderview("mainpage",$list,$data);
  }
   

}
public function check(router $router){

    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $id=$_POST['id']??null;
      $data=$_GET['data']??date("Y-m-d");
      if($id){
        $list=$router->database->showtodo($id,$data);
        $ischeck=$list['ischeck'];
        $value=["ischeck"=>$ischeck,"id"=>$id ];
        $router->database->changevalue($value);


      }

    }
}

public function create(router $router){
$router->renderview("create");
if($_SERVER["REQUEST_METHOD"]==="POST"){
  $title=$_POST['title'];
  $description=$_POST['description'];
  $data=date("Y-m-d");
 $values=[
    "title"=>$title,
    "description"=>$description,
    "date"=>$data

 ];
  $router->database->create($values);
  
 

}

}


 }
?>