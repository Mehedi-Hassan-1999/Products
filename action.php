<?php

    require_once 'vendor/autoload.php';

    //   Use class name
    use App\classes\Product;
    use App\classes\Category;
    use App\classes\Brand;

    // Use class object
    $category = new Category();
    $categories = $category->allCategory();

    $brand = new brand();
    $brands = $brand->allBrand();


    $product = new Product();

    if (isset($_GET['page'])){
        if ($_GET['page'] == 'home'){

            $products= $product->allProduct();
            include 'pages/home.php';
        }
        elseif ($_GET['page'] == 'details'){
            $product_id = $_GET['id'];
            $product = $product->detailsProduct($product_id);
            include 'pages/details.php';
        }
        elseif ($_GET['page'] == 'category'){
            $category_id = $_GET['id'];
            $products = $product->productByCategory($category_id);
            include 'pages/category.php';
        }
        elseif ($_GET['page'] == 'brand'){
            $brand_id = $_GET['id'];
            $products = $product->productByBrand($brand_id);
            include 'pages/brand.php';
        }
    }
