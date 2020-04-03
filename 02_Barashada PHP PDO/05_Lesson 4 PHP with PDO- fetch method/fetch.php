<?php
require('connect.php');

$Arday_query = $db->query("SELECT * FROM Arday");

/*
while($row = $Arday_query->fetch(PDO)){
    // echo $row['magac'] ." ". $row['fure'] . "<br/>";
       //echo "<pre>";
       var_dump($row);
};
*/

while($row = $Arday_query->fetch(PDO:FETCH_BOTH)){
     echo $row['magac'] ." ". $row['fure'] . "<br/>";
};

?>
