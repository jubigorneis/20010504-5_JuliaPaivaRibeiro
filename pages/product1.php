<?php
    include ("../data/products.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body style="background: #B7CFA9; text-align: center;">


     <img src="../image/cnutella.jpg" alt="Cookie de Nutella" width=30% height=30%>
<h2><?php echo $arr['1']['name'] ?></h2>
                <p><?php echo $arr['1']['price'] ?></p>
                <p><?php echo $arr['1']['description'] ?></p>
                <p><?php echo $arr['1']['about'] ?></p>
    
</body>
</html>

