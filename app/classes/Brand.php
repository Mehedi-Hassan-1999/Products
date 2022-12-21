<?php


namespace App\classes;


class Brand
{
    public function allBrand()
    {
        return [
            0 => [
                'id' => 1,
                'name'=> 'Easy Brand'
            ],
            1 => [
                'id' => 2,
                'name'=> 'Calvin Klein Brand'
            ],
            2 => [
                'id' => 3,
                'name'=> 'Nike Brand'
            ],
        ];
    }

    public  function brandById($id){

        $brands = $this->allBrand();
        foreach ($brands as $brand){
            if($brand['id'] == $id){
                return $brand;
            }
        }
    }
}