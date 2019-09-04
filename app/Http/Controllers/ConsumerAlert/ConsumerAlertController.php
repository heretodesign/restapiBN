<?php

namespace App\Http\Controllers\ConsumerAlert;

use App\Http\Resources\ConsumerAlertResource;
use App\Http\Resources\ConsumerAlertCollection;

use App\ConsumerAlert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsumerAlertController extends Controller
{
  /**
   *
   * @return ConsumerAlertCollection
   */
  public function index(): ConsumerAlertCollection
  {
    // return new ConsumerAlertCollection(ConsumerAlert::all());
    return new ConsumerAlertCollection(ConsumerAlert::paginate());
  }


  /**
   *
   * @param  \App\ConsumerAlert  $consumerAlert
   * @return ConsumerAlertResource
   */
  public function show(ConsumerAlert $consumerAlert): ConsumerAlertResource
  {
     return new ConsumerAlertResource($consumerAlert);
  }
}
