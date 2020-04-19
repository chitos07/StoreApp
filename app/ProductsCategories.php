<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsCategories extends Model
{
    protected $table = 'products_categories';

    protected $fillable = [

        'categorieName',

     ];

    

     public function product()
     {
         return $this->hasMany(Product::class,'productcat_id');
     }
}
