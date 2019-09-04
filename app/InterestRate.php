<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterestRate extends Model
{
    protected $fillable = ['product', 'date', 'overnight', '1_week', '1_month', '3_months', '6_months', '1_year'];
}
