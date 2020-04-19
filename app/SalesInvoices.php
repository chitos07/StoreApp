<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesInvoices extends Model
{
 
        
    protected $fillable = [];

   public $money = [];

    public function Sales()
    {
        return $this->hasMany(Sales::class);
    }


    public function getTotalGainAttribute()
    {   
        $total_gain  = 0;
        foreach ($this->Sales as $item){
            $total_gain  +=    ($item->price  -  ($item->Qunitiy * $item->Product->unitPrice + $item->Packages->Unit_Price)); 
           
        }

        return $total_gain;
    }   


    public   function getTakeMoneyAttribute()
    {
        $take_money = 0;
        foreach ($this->Sales as $item){
            $allmoney =    ($item->price  -  ($item->Qunitiy * $item->Product->unitPrice + $item->Packages->Unit_Price)); 
            $take_money  +=  $allmoney;
        }

        return $take_money;
    }



    public function getTotalAmountAttribute()
    {
        $total_amount = 0;
        foreach ($this->Sales as $item){
            $total_amount += $item->price ;
        }
        return $total_amount;
    }
    
}
