<?php
require('connect.php');

$id = intval($_GET['id']);
$Arday_query = $db->query("SELECT * FROM Arday WHERE id= $id");

foreach($row = $Arday_query->fetch(PDO::FETCH_BOTH));
     echo $row['magac'] ." ". $row['fure'] . "<br/>";



?>
