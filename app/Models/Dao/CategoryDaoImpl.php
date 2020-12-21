<?php

namespace App\Models\dao;

use Illuminate\Support\Facades\DB;
use App\Models\Dao\CategoryDaoInterface;
use App\Models\Models\Category;

class CategoryDaoImpl implements CategoryDaoInterface{

    public function getAllCategories(){
        $resultbdd = DB::select("exec get_all_categories");

        $allCategories = [];
        foreach($resultbdd as $i => $row){
            $category = new Category();
            $category->setId($row->category_id);
            $category->setName($row->category_name);

            array_push($allCategories, $category);
        }

        return $allCategories;
    }

    /*public function getCategoryById($id){
        
        $resultbdd = DB::select("exec get_category_by_id @id=".$id);

        $category = new Category();
        $category->setId($resultbdd[0]->category_id);
        $category->setName($resultbdd[0]->category_name);

        return $category;
    }*/
    
}
