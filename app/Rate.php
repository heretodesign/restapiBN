<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
   protected $fillable = ['date', 'buying_rate', 'selling_rate', 'middle_rate'];

   public function exchangeRate()
   {
       return $this->belongsTo('App\ExchangeRate');
   }
}
