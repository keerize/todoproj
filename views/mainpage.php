<div id="todonote">
<link  rel="stylesheet" href="index.css">

    <h2> zadania z: <?php echo $daterw?></h2><br>

    zmień date: <form method="GET" action="/">
 <input type="text" name='data'>
 <input type="submit">
    </form>
    <br>
   <?php foreach ($params as $key => $value):?>
   <h3><?php echo $key+1 ?>.</h3> <div class="under" > <?php
      if($value['ischeck']==false){ echo '<a style="color:red; font-weight: bold;  font-size: 24px">X</a>';}
      else{
       echo  ' <a style="color:green; font-weight: bold; font-size: 24px;">V</a>';
      }
      
      
      ?> <div class="show"><?php echo $value["title"] ?>  
       <div class="description"><?php echo $value["description"] ?>  </div></div>
   <form action="/check" method="POST">
     <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
     <input type="hidden" name="check" value="<?php echo $value['ischeck'] ?>">
     <input type="submit" value="odznacz" >
  </form>
   </div>
   <br>
 
  
 <?php endforeach?>
 <br>
<a href="/create" name="create"><button>stwórz zadanie</button></a>

</div>