<?php

namespace App\Models\Models;


class Stock
{
	private $quantity;
	private Product $product;

	public function getQuantity(){
		return $this->quantity;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}

	public function getProduct() :Product{
		return $this->product;
	}

	public function setProduct(Product $product){
		$this->product = $product;
	}
}
