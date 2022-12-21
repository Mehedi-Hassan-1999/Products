<?php


namespace App\classes;

use App\classes\Category;

class Product
{
    // Variable Declare
    public $res= [], $res2=[];


    public function allProduct(){
        return [
            0=>[
                'id'=>1,
                'name'=>'Shirt',
                'category_id'=>1,
                'brand_id'=> 1,
                'price'=>500,
                'image'=> 'shirt-01.jpg',
                'description'=> 'This is one of the best product in the world. All sizes are available in our store. Our all products are very comfortable.'
            ],
            1=>[
                'id'=>2,
                'name'=>'Sharee',
                'category_id'=>2,
                'brand_id'=> 2,
                'price'=>1000,
                'image'=> 'sharee-01.jpg',
                'description'=> 'This is one of the best product in the world. All sizes are available in our store. Our all products are very comfortable.'
            ],
            2=>[
                'id'=>3,
                'name'=>'Kid_clothe',
                'category_id'=>3,
                'brand_id'=> 3,
                'price'=>700,
                'image'=> 'kid-clothe-01.jpg',
                'description'=> 'This is one of the best product in the world. All sizes are available in our store. Our all products are very comfortable.'
            ],
            3=>[
                'id'=>4,
                'name'=>'T-shirt',
                'category_id'=>1,
                'brand_id'=> 1,
                'price'=>600,
                'image'=> 't-shirt-01.jpg',
                'description'=> 'This is one of the best product in the world. All sizes are available in our store. Our all products are very comfortable.'
            ],
            4=>[
                'id'=>5,
                'name'=>'Sharee',
                'category_id'=>2,
                'brand_id'=> 2,
                'price'=>2000,
                'image'=> 'sharee-02.jpg',
                'description'=> 'This is one of the best product in the world. All sizes are available in our store. Our all products are very comfortable.'
            ],
            5=>[
                'id'=>6,
                'name'=>'Kid_clothe',
                'category_id'=>3,
                'brand_id'=> 3,
                'price'=>800,
                'image'=> 'kid-clothe-02.jpg',
                'description'=> 'This is one of the best product in the world. All sizes are available in our store. Our all products are very comfortable.'
            ],
            6=>[
                'id'=>7,
                'name'=>'Shirt',
                'category_id'=>1,
                'brand_id'=> 1,
                'price'=>1500,
                'image'=> 'shirt-02.jpg',
                'description'=> 'This is one of the best product in the world. All sizes are available in our store. Our all products are very comfortable.'
            ],
        ];
    }

    public function detailsProduct($id){
        $products = $this->allProduct();
        foreach ($products as $product){
            if ($product['id'] == $id){

                $category = new Category();
                $categoryById = $category->categoryById($product['category_id']);
                $product['category_name'] = $categoryById['name'];
                return $product;
            }
        }
    }

    public function productByCategory($catId){
        $products = $this->allProduct();
        foreach ($products as $product){
            if($product['category_id']== $catId){
                array_push($this->res, $product);
            }
        }
        return $this->res;
    }

    public function productByBrand($brandId){
        $products = $this->allProduct();
        foreach ($products as $product){
            if($product['brand_id']== $brandId){
                array_push($this->res2, $product);
            }
        }
        return $this->res2;
    }
}