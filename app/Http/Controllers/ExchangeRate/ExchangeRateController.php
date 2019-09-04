<?php

namespace App\Http\Controllers\ExchangeRate;

use App\Http\Resources\ExchangeRateResource;
use App\Http\Resources\ExchangeRateCollection;

use App\ExchangeRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExchangeRateController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(): ExchangeRateCollection
  {
      return new ExchangeRateCollection(ExchangeRate::all());
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\ExchangeRate  $exchangeRate
   * @return \Illuminate\Http\Response
   */
  public function show(ExchangeRate $exchangeRate): ExchangeRateResource
  {
      return new ExchangeRateResource($exchangeRate->load('rate'));
  }
}
