<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ExchangeRate;

class Rate extends Model
{
   protected $fillable = ['date', 'buying_rate', 'selling_rate', 'middle_rate'];

   public function exchangeRate()
   {
       return $this->belongsTo(ExchangeRate::class);
   }
}
