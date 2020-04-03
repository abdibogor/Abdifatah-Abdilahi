<?php
require('connect.php');

$Arday_query = $db->query("SELECT *  FROM Arday");
$Arday = $Arday_query->fetchall(PDO::FETCH_ASSOC);
foreach($Arday as $row){ ?>

  <a href="findbyid.php?id=<?php echo $row['id']; ?>"><?php echo $row['magac'] ?></a><br/>

<?php } ?> 


?>
