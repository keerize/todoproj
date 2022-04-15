<?php 
namespace main;

class router{

  public array $getarray=[];
  public array $postarray=[];
  public database $database;
  public function __construct()
  {
      $this->database = new database();
  }
    public function get($url,$fn){

       $this->getarray[$url]=$fn;

    }
    public function post($url,$fn){
        $this->postarray[$url]=$fn;

    }
    public function resolve(){
   
        $pathinfo=$_SERVER["PATH_INFO"]??"/";
        if($_SERVER["REQUEST_METHOD"]==="GET"){
            $fn=$this->getarray[$pathinfo];
        }
        else{
            $fn=$this->postarray[$pathinfo];
        }
        if($fn){
          call_user_func($fn,$this);

        }else{
            echo "</h1> STRONA NIE ISTNIEJE<h1>";
            
        }




    }
    public function renderview($view,$params=[],$daterw=""){
        $daterw=$_GET['data']??date("Y-m-d");
        ob_start();
        require_once __DIR__."/views/layout.php";
        $result=ob_end_clean();
       require_once __DIR__."/views/$view.php";
    }
}


?>