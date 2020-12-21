<?php

namespace App\Models\Manager;

use App\Models\Dao\CategoryDaoInterface;
use App\Models\Manager\CategoryManagerInterface;

class CategoryManagerImpl implements CategoryManagerInterface
{

    private $categoryDao;

    public function __construct(CategoryDaoInterface $categoryDao){
        $this->categoryDao = $categoryDao;
    }

    public function getAllCategories(){
        return $this->categoryDao->getAllCategories();
    }
}
