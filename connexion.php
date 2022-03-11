<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=Billet","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?> 