<!DOCTYPE html>
<html>
<head>
    <style>
        p{
           text-align:center;
           color:yellow;  
           font-size:30px;   
           font-weight:bold;
        }
    </style>
</head>
<body>
<?php



// ---if
$mung = "4";
if ($mung == "1"){
   echo "Visit Father";
 }elseif ($mung == "3"){
    echo "Visit Mother";
 }elseif ($mung == "4"){
    echo "Visit Teacher";
 }elseif ($mung == "5"){
    echo "Visit Friends";
 }elseif ($mung == "6"){
    echo "On Bus";
 }

// ---- switch 
$m = 6;
switch($m) {
    case 1: 
        echo "Visit Father";
        break;
    case 2:
        echo "Visit Mother";
        break;
    case 3:
        echo "Visit Teacher";
        break;
    case 4:
        echo "Visit Friends";
        break;
    case 5:
        echo "On Bus";
        break;
    case 6:
        echo "At PNV";
        break;
    default:
        echo "Sleep at home";
}





?>

</body>
</html>