<?php
    include "header.php";   //  Header File Includes
?>

    <!--Table Section-->
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center"> All Products Information</h2>
                </div>
            </div>

            <div class="row">
            <?php foreach ($products as $product){?>

                <div class="col-md-4 my-5">
                    <div class="card">
                        <div class="card-body">
                            <img src="asset/images/<?php echo $product['image']?>" class="img-fluid" alt="">
                            <h3>Product Name: <?php echo $product['name']?> </h3>
                            <h5>Price: <?php echo $product['price']?>TK</h5>
                            <a href="action.php?page=details&&id=<?php echo $product['id']?>"  class="btn btn-primary btn-block w-100">Details</a>
                        </div>
                    </div>
                </div>

            <?php } ?>

            </div>
        </div>
    </section>


<?php
    include "footer.php";   //  Footer File Includes
?>
