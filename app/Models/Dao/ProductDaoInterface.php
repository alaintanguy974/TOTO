<?php

namespace App\Models\Dao;

interface ProductDaoInterface{
    public function getAllProducts();
    public function getProductById($id);
}
