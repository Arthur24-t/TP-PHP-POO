<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=Billet","root","1234");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?> 