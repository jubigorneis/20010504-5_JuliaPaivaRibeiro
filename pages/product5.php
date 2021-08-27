<?php
    include ("../data/products.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body style="background: #B7CFA9; text-align: center;" >
     
     <img src="../image/mr2.jpg" alt="Macarrom Pistachio + Rum" width=30% height=30%>
<h2><?php echo $arr['5']['name'] ?></h2>
                <p><?php echo $arr['5']['price'] ?></p>
                <p><?php echo $arr['5']['description'] ?></p>
                <p><?php echo $arr['5']['about'] ?></p>
</body>
</html>
