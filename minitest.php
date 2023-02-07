<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=0;
    while ($x < 10) {
        $x++;
        $b = "";
        for ($a = 0; $a <= 10; $a++) {
            if ($x % 2 == 1) {
                $b .= "<div style='height:3rem; width:3rem; background-color:red;'></div>";
            } else {
                $b .= "<div style='height:3rem; width:3rem; background-color:blue;'></div>";
            }
        }
        echo "<div style='display:flex'>$b</div>";
    }
?>
    
</body>
</html>