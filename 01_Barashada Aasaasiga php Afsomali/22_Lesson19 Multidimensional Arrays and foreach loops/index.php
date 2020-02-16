<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

      <?php
/*
      $exam = array(
             "Mohamed"=>array(
              "xisaab"=>90,
              "Afsomali"=>100,
              "chemistry"=>70,
            ),
             "Abdi"=>array(
               "xisaab"=>90,
               "Afsomali"=>100,
               "chemistry"=>70,
             ),
             "Aamina"=>array(
               "xisaab"=>90,
               "Afsomali"=>100,
               "chemistry"=>70,
             ),
      );

    echo $exam['Mohamed']['xisaab'];
    echo"<br />";
    echo $exam['Mohamed']['Afsomali'];
    echo"<br />";
    echo $exam['Mohamed']['chemistry'];
    echo"<br />";

$xisaab = $exam['Aamina']['xisaab'];
$Afsomali = $exam['Aamina']['Afsomali'];
$chemistry = $exam['Aamina']['chemistry'];
$wadar = $xisaab +$Afsomali+$chemistry;
echo $wadar;
*/

/*
$exam = array(
       "Mohamed"=>array(
        "xisaab"=>90,
        "Afsomali"=>100,
        "chemistry"=>70,
      ),
       "Abdi"=>array(
         "xisaab"=>90,
         "Afsomali"=>100,
         "chemistry"=>70,
       ),
       "Aamina"=>array(
         "xisaab"=>90,
         "Afsomali"=>100,
         "chemistry"=>70,
       ),
);

foreach($exam as $fure=>$natiijo){
  echo "<u>$fure</u> <br />";

  foreach($natiijo as $fure=>$maado){
     echo "$fure wuxuu keenay $maado <br />";
  }
}
*/

$exam = array(
       "Mohamed"=>array(
        "xisaab"=>90,
        "Afsomali"=>100,
        "chemistry"=>70,
      ),
       "Abdi"=>array(
         "xisaab"=>90,
         "Afsomali"=>100,
         "chemistry"=>70,
       ),
       "Aamina"=>array(
         "xisaab"=>90,
         "Afsomali"=>100,
         "chemistry"=>70,
       ),
);

foreach($exam as $fure=>$natiijo){
  echo "<u>$fure</u> <br />";

  foreach($natiijo as $fure=>$maado){
     echo "$maado <br />";
  }
}

      ?>

</body>
</html>
