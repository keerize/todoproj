<?php
namespace main;
use PDO;

class database{
    public static database $db;
public function __construct()
{
    $this->PDO= new PDO("mysql:host=localhost;port=3306;dbname=todolist;","keerizee","");
    $this->PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    self::$db=$this;
}

public function showtodo($id='',$data){
    
    if($id){
        $statment= $this->PDO->prepare("SELECT * FROM todo WHERE id=:id AND date=:data");
        $statment->bindValue(":id",$id);
        $statment->bindValue(":data",$data);
        $statment->execute();
      return $statment->fetch(PDO::FETCH_ASSOC);}

  else{
    $statment= $this->PDO->prepare("SELECT * FROM todo WHERE date=:data");
    $statment->bindValue(":data",$data);
    $statment->execute();
  return $statment->fetchall(PDO::FETCH_ASSOC);}
  }
  



public function changevalue($values){

    if($values["ischeck"]>0){$values['ischeck']=0;}
    else{$values['ischeck']=1;}

    
    $statment= $this->PDO->prepare("UPDATE todo SET ischeck=:ischeck WHERE id=:id");
    $statment->bindValue(":ischeck",$values["ischeck"]);
    $statment->bindValue(":id",$values['id']);
    $statment->execute();
    header("Location:/");
}
public function create($values){

    $statment= $this->PDO->prepare("INSERT INTO todo (title,description,date,ischeck) VALUES (:title,:description,:date,0)");
    $statment->bindValue(":title",$values["title"]);
    $statment->bindValue(":description",$values['description']);
    $statment->bindValue(":date",$values["date"]);
    $statment->execute();
    header("Location:/");


}


}


?>

