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
    $cdai=$_POST["dai"];
    $crong=$_POST["rong"];
    $dt=$cdai * $crong;
    switch($dt){
        case 200:
            $tb = "Xây Villa" ;
            break;
        case 150:
            $tb = "Xây biệt thự";
            break;
        case 100:
            $tb = "Xây nhà cao tầng";
            break;
    }
    ?>
    <form id= "forml" name = "forml" method="post">
        <table width = "400" border="0" align ="center" cellpadding="2" cellspacing="2">
            <tr>
                <td colspan="2" align="center"><span class="stylel">DIỆN TÍCH HÌNH CHỮ NHẬT</span></td>
            </tr>
            <tr>
                <td width="125" <span class="atyle4">Chiều dài: </span></td>
                <td width="261"><label for="">
                    <input type="text" name="dai" id="dai" value="<?php echo $_POST["dai"];?>"size="20"/>
                </label></td>
            </tr>
            <tr>
                <td> <span class="atyle4">Chiều rộng: </span></td>
                <td> <label> <input type="text" name="rong" id="rong" value="<?php echo $_POST["rong"];?>"size="20"/> </label></td>
            </tr>
            <tr>
                <td> <span class="style4">Diện tích: </span></td>
                <td><label>
                    <input type="text" name="dt" id="dt" value="<?php echo $dt;?>" size ="20"/>
                </label>
                </td>
            </tr>
            <tr>
               <td> <span class="style4">Nhận xét: </span></td>
                <td><label>
                    <input type="text" name="tb" id="tb" value="<?php echo $tb;?>" size ="20"/>
                </label>
                </td>
            </tr>
            <tr>
                <td colspan ="2" align="center"> <label> <input type="submit" name="Submit" value="Tính"></label></td>
                <td colspan="2">&nbsp:</td>
            </tr>
        </table>
    </form>
</body>
<script>
    document.getElementById(tb) = <?php echo $tb ?>
</script>
</html>