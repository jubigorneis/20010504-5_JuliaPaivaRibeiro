

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    

	<title>Pistachio + Rum</title>
     

</head>
<body>

    <header> 
    <div class="topo_home" style="background: #B7CFA9;">  
    <img src="image/logo.png" alt="Logo_do_site" style=" margin-left: 39%;" width="250" height="250">    
    </div>  

    <div class="barra_menu" style="background: #76876B;">
        <ul class="nav" style=" margin-left:35%";>
  <li class="nav-item">
    <a class="nav-link" href="index.php?pagina=pages/home.php"style="color: white;">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?pagina=pages/contato.php" style="color: white;">Contato</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?pagina=pages/quem_somos.php" style="color: white;">Quem Somos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?pagina=pages/localizacao.php"style="color: white;">Localização</a>
  </li>   
</ul>
</div>
</header>

<main>
      <?php
          if(isset($_GET["pagina"]) && !empty($_GET["pagina"])){
            $pagina = $_GET["pagina"];
            include($pagina);
            } else{
                include("pages/home.php");

            }



      ?>

</main>

</body>
</html>
<?php include("pages/footer.php");

