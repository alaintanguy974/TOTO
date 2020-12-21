<?php

namespace App\Providers;

use App\Models\dao\BrandsDaoImpl;
use App\Models\Dao\BrandsDaoInterface;
use App\Models\dao\CategoryDaoImpl;
use App\Models\Dao\CategoryDaoInterface;
use App\Models\Dao\ProductDaoImpl;
use App\Models\Dao\ProductDaoInterface;
use App\Models\Dao\StockDaoImpl;
use App\Models\Dao\StockDaoInterface;
use App\Models\Manager\BrandsManagerImpl;
use App\Models\Manager\BrandsManagerInterface;
use App\Models\Manager\CategoryManagerImpl;
use App\Models\Manager\CategoryManagerInterface;
use App\Models\Manager\ProductManagerImpl;
use App\Models\Manager\ProductManagerInterface;
use App\Models\Manager\StockManagerImpl;
use App\Models\Manager\StockManagerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BrandsManagerInterface::class, BrandsManagerImpl::class);
        $this->app->bind(BrandsDaoInterface::class, BrandsDaoImpl::class);
        $this->app->bind(CategoryDaoInterface::class, CategoryDaoImpl::class);
        $this->app->bind(CategoryManagerInterface::class, CategoryManagerImpl::class);
        $this->app->bind(ProductDaoInterface::class, ProductDaoImpl::class);
        $this->app->bind(ProductManagerInterface::class, ProductManagerImpl::class);
        $this->app->bind(StockDaoInterface::class, StockDaoImpl::class);
        $this->app->bind(StockManagerInterface::class, StockManagerImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}