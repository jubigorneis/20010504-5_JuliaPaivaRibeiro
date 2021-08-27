<?php
    include ("../data/products.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body style="background: #B7CFA9; text-align: center";>
     <img src="../image/ckitkat.jpg" alt="Cookie Kit Kat" width=30% height=30%>
<h2><?php echo $arr['4']['name'] ?></h2>
                <p><?php echo $arr['4']['price'] ?></p>
                <p><?php echo $arr['4']['description'] ?></p>
                <p><?php echo $arr['4']['about'] ?></p>
</body>
</html>
