<?php

namespace App\Http\Controllers;

use App\Models\Manager\BrandsManagerImpl;
use App\Models\Manager\BrandsManagerInterface;
use App\Models\Models\Brands;
//use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BrandsManagerInterface $brandsManager)
    {

        //$brandsManager = new BrandsManagerImpl();
        //recuperer tous les brands
        
        // entre ici MODEL de MVC
        $brands = $brandsManager->getAllBrands();


        // et ici 
        return view('listeBrands')->with(['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    /*public function show(Brands $brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Brands $brands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, Brands $brands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Models\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brands $brands)
    {
        //
    }
}
