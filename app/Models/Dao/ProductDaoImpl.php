<?php

namespace App\Models\Dao;

use App\Models\dao\BrandsDaoImpl;
use App\Models\dao\CategoryDaoImpl;
use App\Models\Dao\ProductDaoInterface;
use App\Models\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductDaoImpl implements ProductDaoInterface{


    private $categoryDao;
    private $brandDao;

    public function __construct(CategoryDaoInterface $categoryDao, BrandsDaoInterface $brandDao){
        $this->categoryDao  = $categoryDao;
        $this->brandDao  = $brandDao;
    }

    public function getAllProducts(){

        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.products");
        $resultbdd = $reponse->fetchAll();

        $allCategories = [];
        foreach($resultbdd as $i => $row){
            $product = new Product();
            $product->setId($row['product_id']);
            $product->setName($row['product_name']);
            $product->setYear($row['model_year']);
            $product->setPrice($row['list_price']);

            $category = $this->categoryDao->getCategoryById($row['category_id']);
            $brand = $this->brandDao->getBrandById($row['brand_id']);

            $product->setCategory($category);
            $product->setBrand($brand);

            array_push($allCategories, $product);
        }

        return $allCategories;
    }

    public function getProductById($id){
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.products WHERE product_id = '".$id."'");
        $resultbdd = $reponse->fetch();

        $product = new Product();
        $product->setId($resultbdd['product_id']);
        $product->setName($resultbdd['product_name']);
        $product->setYear($resultbdd['model_year']);
        $product->setPrice($resultbdd['list_price']);

        $category = $this->categoryDao->getCategoryById($resultbdd['category_id']);
        $brand = $this->brandDao->getBrandById($resultbdd['brand_id']);

        $product->setCategory($category);
        $product->setBrand($brand);

        return $product;
    }
}
