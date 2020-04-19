<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //  protected $guarded = [];
    
    protected $fillable = [
        'productcat_id',
        'productName',
        'productQuantity',
        'productPrice',
        'unitPrice'
     ];


      public function product_categories()
     {
         return $this->belongsTo(ProductsCategories::class,'productcat_id');
     }


     public function Sales()
     {  

            return $this->hasMany(Sales::class);
         
     }
   
}
