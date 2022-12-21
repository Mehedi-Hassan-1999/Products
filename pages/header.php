<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Our Website Name-->
    <title>Mehedi Fashion company</title>

    <!--CSS Link-->
    <link rel="stylesheet" href="asset/CSS/bootstrap.css">

</head>
<body>

        <!--NavBar Section-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <div class="container">
                <a href="home.php" class="navbar-brand">
                    <img src="asset/images/logo.jpg" class="img-fluid" width="80px" alt="Our website logo">
                </a>
                <ul class="navbar-nav">
                    <li>
                        <a href="home.php" class="nav-link active">Home</a>
                    </li>
                    <li>
                        <a href="" class="nav-link">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product category</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($categories as $category){?>
                            <li>
                                <a href="action.php?page=category&&id=<?php echo $category['id']?>" class="dropdown-item"><?php echo $category['name']?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brand category</a>
                        <ul class="dropdown-menu">
                            <?php foreach ($brands as $brand){?>
                                <li>
                                    <a href="action.php?page=brand&&id=<?php echo $brand['id']?>" class="dropdown-item"><?php echo $brand['name']?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>



