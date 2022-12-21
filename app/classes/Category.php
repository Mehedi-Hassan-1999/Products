<?php


namespace App\classes;


class Category
{
    public function allCategory()
    {
        return [
            0 => [
                'id' => 1,
                'name'=> 'Man Clothe'
            ],
            1 => [
                'id' => 2,
                'name'=> 'Woman Clothe'
            ],
            2 => [
                'id' => 3,
                'name'=> 'Kid Clothe'
            ],
        ];
    }

    public  function categoryById($id){

        $categories = $this->allCategory();
        foreach ($categories as $category){
            if($category['id'] == $id){
                return $category;
            }
        }
    }
}