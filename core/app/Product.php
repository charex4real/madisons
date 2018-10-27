<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'name', 'title', 'description', 'status', 'category_id'
	];

	  //This is a one to many relationship and we will use Eloquent to setup the relationship. 
    public function category()
	{
	    return $this->belongsTo(Category::class);
	}	
}
