<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
</head>
<body>

        <?php
          /*
        $tirooyin = array(1,2,3,4,5);
        echo "$tirooyin[1]";
        */

          /*
        $tirooyin = array(1,2,3,4,5,"Abdi","Ali");
        echo "$tirooyin[5]";
        */

        /*
        $tirooyin = array(1,2,3,4,5,"Abdi","Ali");

        for ($tiro =0;$tiro <7;$tiro++){
          echo "Tirada $tiro Qiimaheedu waa $tirooyin[$tiro] <br />";
        }
        */

        $tirooyin = array(1,2,3,4,5,"Abdi","Ali",548,54);

        $xadid = count($tirooyin);
        echo"<br />";
        for ($tiro =0;$tiro <$xadid;$tiro++){
          echo "Tirada $tiro Qiimaheedu waa $tirooyin[$tiro] <br />";
        }

        ?>

</body>
</html>
