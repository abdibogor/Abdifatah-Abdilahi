<?php

/*
switch(tibix)
*/

/*
$user_type = "Maamule";
if($user_type == "Maamule"){
   echo "Soo dhawaw Maamule";
}elseif ($user_type == "xubin") {
   echo "soo dhawaw xubin sare";
}else{
   echo "Laguma Aqoonsan";
}
*/

/*
$user_type = "xubin";
if($user_type == "Maamule"){
   echo "Soo dhawaw Maamule";
}elseif ($user_type == "xubin") {
   echo "soo dhawaw xubin sare";
}else{
   echo "Laguma Aqoonsan";
}
*/

$user_type = "ani";

if($user_type == "Maamule"){
   echo "Soo dhawaw Maamule";
}elseif ($user_type == "xubin") {
   echo "soo dhawaw xubin sare";
}else{
   echo "Laguma Aqoonsan";
}

echo "<br />";
$user_type = "xubin";
switch($user_type){
    case "Maamule": echo "Soo dhawaaw Maamule";
    break;
    case "xubin": echo "Soo dhawaaw xubin sare";
    break;
    default:echo "Laguma Aqoonsan walaal";
    break;
}

echo "<br />";
$maalin = date("D");
switch($maalin){
    case "Fri": echo "Maanta waa jimce";
    break;
    case "Sat": echo "Maanta waa Sabti";
    break;
    case "Sun": echo "Maanta waa Axad";
    break;
    case "Mon": echo "Maanta waa Isniin";
    break;
    case "Tue": echo "Maanta waa Talaada";
    break;
    case "Wed": echo "Maanta waa Arbaca";
    break;
    case "Thur": echo "Maanta waa Khamis";
    break;
    default: echo "Maalin jirta maahan";
    break;
}

?>
