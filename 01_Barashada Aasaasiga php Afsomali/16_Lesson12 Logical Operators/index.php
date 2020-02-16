<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
      <title>Abdibogoreh</title>
</head>
<body>

  <?php

   /*
     && iyo
     || ama
     ! ahayn

   */


   $a = 5;
   $b = 7;
   $c = 10;

   if (($a > $b)AND ($c < $b)) {
      echo "A way kawayn tahay B Sidoo Kale C way ka yar tahay B";
   }else{
      echo "A Kamawayna B sidoo kale C kama yara B";
   }
  echo"<br />";

   if(($c > $b) || ($b < $a)) {
       echo "C way kawayn tahay B sidoo kale B way kawayn tahay A";
   }else{
      echo "xaaladan maahan sax";
   }

  echo"<br />";
   if ($a != $b) {
      echo "A lamid mahan B";
   }else{
      echo "A waxay lamid tahay $b";
   }

  ?>


</body>
</html>
