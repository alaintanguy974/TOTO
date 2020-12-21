<?php

namespace App\Models\Dao;

use Illuminate\Support\Facades\DB;
use App\Models\Models\Brands;
use App\Models\Dao\BrandsDaoInterface;


class BrandsDaoImpl implements BrandsDaoInterface
{
    function getAllBrands()
    {
        $resultbdd = DB::select('SELECT * FROM production.brands');

        $allBrands = [];
        foreach($resultbdd as $i => $row) {
            $brand = new Brands();
            $brand->setId($row->brand_id);
            $brand->setName($row->brand_name);

            array_push($allBrands, $brand);
        }
        return $allBrands;
    }

}
