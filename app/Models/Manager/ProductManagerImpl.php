<?php

namespace App\Models\Manager;

use App\Models\Dao\ProductDaoInterface;
use App\Models\Manager\ProductManagerInterface;

class ProductManagerImpl implements ProductManagerInterface
{

    private $productDao;

    public function __construct(ProductDaoInterface $productDao){
        $this->productDao = $productDao;
    }

    public function getAllProducts()
    {
        return $this->productDao->getAllProducts();    
    }
}
