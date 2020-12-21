<?php

namespace App\Models\Models;

use App\Models\Models\Category;
use App\Models\Models\Brands;


class Product
{
    private $id;
    private $name;
    private $year;
	private $price;

	private Category $category;
	private Brands $brand;


    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getYear(){
		return $this->year;
	}

	public function setYear($year){
		$this->year = $year;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getCategory() : Category{
		return $this->category;
	}

	public function setCategory(Category $category){
		$this->category = $category;
	}

	public function getBrand() : Brands
	{
		return $this->brand;
	}

	public function setBrand(Brands $brand){
		$this->brand = $brand;
	}

}
