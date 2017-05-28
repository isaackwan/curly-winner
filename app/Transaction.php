<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $hidden = [];
    protected $appends = ['category_id'];
    //protected $dates = ['created_at', 'updated_at', 'date'];
	public function getCategoryIdAttribute() {
		switch ($this->category) {
			case "Dining":
				return "dining.png";
			case "Groceries":
				return "groceries.svg";
			case "Bills":
				return "bills.png";
			default:
				throw new \Exception('unknown category type');
		}
	}
}
