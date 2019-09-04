<?php

namespace App\Http\Controllers\InterestRate;

use App\Http\Resources\InterestRateResource;
use App\Http\Resources\InterestRateCollection;
use App\InterestRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InterestRateController extends Controller
{
  /**
   *
   * @return InterestRateCollection
   */
  public function index(): InterestRateCollection
  {
    // return new InterestRateCollection(InterestRate::all());
    return new InterestRateCollection(InterestRate::paginate());
  }

  /**
   *
   * @param  \App\InterestRate  $interestRate
   * @return InterestRateResource
   */
  public function show(InterestRate $interestRate): InterestRateResource
  {
      return new InterestRateResource($interestRate);
  }
}
