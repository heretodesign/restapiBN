<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rate;

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
      return $this->hasMany(Rate::class);
  }

}
