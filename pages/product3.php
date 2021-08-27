<?php
    include ("../data/products.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body style="background: #B7CFA9; text-align: center;">
    <img src="../image/pistache.png" alt="Macarrom Pistachio + Rum" width=30% height=30%>
     
<h2><?php echo $arr['3']['name'] ?></h2>
                <p><?php echo $arr['3']['price'] ?></p>
                <p><?php echo $arr['3']['description'] ?></p>
                <p><?php echo $arr['3']['about'] ?></p>
</body>
</html>
