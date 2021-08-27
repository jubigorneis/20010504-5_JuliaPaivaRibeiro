<?php
    include ("../data/products.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body style="background: #B7CFA9 ; text-align: center;">
     <img src="../image/macarrons.png" alt="Macarron de Nutella" >
<h2><?php echo $arr['2']['name'] ?></h2>
                <p><?php echo $arr['2']['price'] ?></p>
                <p><?php echo $arr['2']['description'] ?></p>
                <p><?php echo $arr['2']['about'] ?></p>
</body>
</html>

