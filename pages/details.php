<?php
include 'pages/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="asset/images/<?php echo $product['image']?>" class="img-fluid" alt="Clothe Image">
                    </div>
                    <div class="col-md-6">
                        <h3><span style="color:purple">Product Name: </span><?php echo $product['name']?></h3>
                        <h4><span style="color:purple">Category Name: </span><?php echo $product['category_name']?></h4>
                        <h5><span style="color:purple">Product Price: </span><?php echo $product['price']?></h5>
                        <h6><span style="color:purple">Product Description: </span><?php echo $product['description']?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'pages/footer.php'?>