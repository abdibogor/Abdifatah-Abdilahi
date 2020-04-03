<?php

     try{
     $db = new PDO("mysql:host=localhost;dbname=pdo_db","root","fahad");
     }catch(Exception $e){
       echo "CIlad ayaa jirta ciladaas oo ah" . $e-getMessage();
     }

?>
