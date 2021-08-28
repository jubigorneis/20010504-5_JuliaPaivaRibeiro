<?php
    include 'data/products.php';

?>

<main>


    <!--  -->
    <div class="container marketing">
        <div class="row pb-5">
            <h2 class="featurette-heading fs-1"></h2>
            <p class="lead mb-5"></p>
            <hr class="featurette-divider mb-5">

        <div></div>

            <!-- -->
            <div class="col-lg-4">
                <img src="<?php echo $arr['1']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['1']['name'] ?>">


                <h2 class="mt-3"><?php echo $arr['1']['name'] ?></h2>
                <p><?php echo $arr['1']['description'] ?></p>
                <p><a class="btn btn-outline-danger" href="./pages/product1.php">Conferir</a></p>
            </div>

            <!-- -->
            <div class="col-lg-4">
                <img src="<?php echo $arr['2']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['2']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['2']['name'] ?></h2>
                <p><?php echo $arr['2']['description'] ?></p>
                <p><a class="btn btn-outline-danger" href="./pages/product2.php">Conferir</a>
            </div>
            
            <!-- -->
            <div class="col-lg-4">
                <img src="<?php echo $arr['3']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['3']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['3']['name'] ?></h2>
                <p><?php echo $arr['3']['description'] ?></p>
                <p><a class="btn btn-outline-danger" href="./pages/product3.php">Conferir</a>
            </div>

            <!--  -->
            <div class="col-lg-4 mt-5">
                <img src="<?php echo $arr['4']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['4']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['4']['name'] ?></h2>
                <p><?php echo $arr['4']['description'] ?></p>
                <p><a class="btn btn-outline-danger" href="./pages/product4.php">Conferir</a>
            </div>

            <!--  -->
            <div class="col-lg-4 mt-5">
                <img src="<?php echo $arr['5']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['5']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['5']['name'] ?></h2>
                <p><?php echo $arr['5']['description'] ?></p>
                <p><a class="btn btn-outline-danger" href="index.php?pagina=./pages/product5.php">Conferir</a>
            </div>

            <!--  -->
            <div class="col-lg-4 mt-5">
                <img src="<?php echo $arr['6']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['6']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['6']['name'] ?></h2>
                <p><?php echo $arr['6']['description'] ?></p>
                <p><a class="btn btn-outline-danger" href="./pages/product6.php">Conferir</a>
            </div>
        </div>
    </div> 

  </div>


</main>