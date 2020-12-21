<?php

namespace App\Models\Dao;

use App\Models\Models\Stock;
use Illuminate\Support\Facades\DB;

class StockDaoImpl implements StockDaoInterface{


    private $produitDao;

    public function __construct(ProductDaoInterface $produitDao){
        $this->produitDao = $produitDao;
    }

    public function getAllStocks(){
        $bdd = DB::getPdo();
        $reponse = $bdd->query("SELECT * FROM production.stocks");
        $resultbdd = $reponse->fetchAll();

        $allBrands = [];
        foreach($resultbdd as $i => $row){
            $stock = new Stock();
            $stock->setQuantity($row['quantity']);
            
            $produit = $this->produitDao->getProductById($row['product_id']);
            $stock->setProduct($produit);

            array_push($allBrands, $stock);
        }

        return $allBrands;
    }
}

