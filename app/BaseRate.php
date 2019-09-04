<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseRate extends Model
{
   protected $fillable = ['bank_code', 'bank_name', 'base_rate', 'indicative_eff_lending_rate', 'base_lending_rate'];
}
