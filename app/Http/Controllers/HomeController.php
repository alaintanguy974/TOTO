<?php

namespace App\Http\Controllers;

use App\Models\Manager\BrandsManagerInterface;
use App\Models\Manager\CategoryManagerInterface;

class HomeController extends Controller
{
    public function index(
        BrandsManagerInterface $brandsManager,
        CategoryManagerInterface $categoryManager
    ) {
        $allBrands = $brandsManager->getAllBrands();
        $allCategories = $categoryManager->getAllCategories();

        return view('home')->with([
            'brands' => $allBrands,
            'categories' => $allCategories
        ]);
    }
}
