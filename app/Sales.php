<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{

    
     protected $fillable = [
        'sales_invoices_id',
        'Qunitiy',
        'Product_id',
        'packages_id',
        'price'
     ];


    public function Packages()
    {
        return $this->belongsTo(Packages::class);
    }


    public function Product()
    {
        return $this->belongsTo(Product::class,'Product_id');
    }
 

 

    public function SalesInvoices()
    {
        return $this->belongsTo(SalesInvoices::class);
    }

}
