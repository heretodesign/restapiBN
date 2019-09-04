<?php

namespace App\Http\Controllers\BaseRate;

use App\Http\Resources\BaseRateResource;
use App\Http\Resources\BaseRateCollection;

use Illuminate\Http\Request;
use App\BaseRate;
use App\Http\Controllers\Controller;

class BaseRateController extends Controller
{
  /**
   *
   * @return BaseRateCollection
   */
    public function index(): BaseRateCollection
    {
      // return new BaseRateCollection(BaseRate::all());
      return new BaseRateCollection(BaseRate::paginate());
    }


    /**
     *
     * @param  BaseRate $baseRate
     * @return BaseRateResource
     */
    public function show(BaseRate $baseRate): BaseRateResource
    {
      return new BaseRateResource($baseRate);
    }
}
