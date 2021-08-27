<?php
    include ("../data/products.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
</head>
<body style="background: #B7CFA9; text-align: center;">
    
     <img src="../image/ms1.jpg" alt="Milk Shakes" width=30% height=30%>
     
<h2><?php echo $arr['6']['name'] ?></h2>
                <p><?php echo $arr['6']['price'] ?></p>
                <p><?php echo $arr['6']['description'] ?></p>
                <p><?php echo $arr['6']['about'] ?></p>
</body>
</html>
