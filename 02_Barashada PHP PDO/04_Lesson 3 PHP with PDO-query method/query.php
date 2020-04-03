<?php
require('connect.php');

$Arday_query = $db->query("SELECT * FROM Arday");

foreach($Arday_query as $A_$row){
     echo $row['magac'] ." ". $row['fure'] . "<br/>";
};

?>
