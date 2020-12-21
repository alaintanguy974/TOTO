<?php

namespace App\Models\Manager;

use App\Models\Dao\BrandsDaoImpl;

class BrandsManagerImpl implements BrandsManagerInterface{

    private $brandsDao;

    public function __construct(BrandsDaoImpl $brandsDao){
        $this->brandsDao = $brandsDao;
    }

    public function getAllBrands(){
        return $this->brandsDao->getAllBrands();
    }
}
