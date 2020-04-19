<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{

        protected $guarded = [];



        public function Sales()
        {
                return $this->hasMany(Sales::class);
        }


}
