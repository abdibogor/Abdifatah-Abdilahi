<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

      <?php

            function salaan(){
               echo "Asalaamu calaykum";
            }

            salaan();

   echo "<br />";

            function iskudar($qiime1,$qiime2){
                $wadar = $qiime1 + $qiime2;
                return $wadar;
            }

            $qiime = iskudar(4,5);
            echo $qiime;

          echo "<br />";

      function kudar($qiime1,$qiime2){
        $wadar = $qiime1 * $qiime2;
        return $wadar;
    }

    $qiime = kudar(4,5);
    echo $qiime;

      ?>

</body>
</html>
