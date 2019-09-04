<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    //
    protected $fillable = ['currency_code', 'unit'];

    protected $hidden = ['id', 'created_at', 'updated_at'];

  /**
  * Get the rates for the exchange rate
  */
   public function rate()
   {
       return $this->hasMany('App\Rate');
   }

}
