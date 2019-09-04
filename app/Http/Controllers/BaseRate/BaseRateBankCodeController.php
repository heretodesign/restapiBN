<?php

namespace App\Http\Controllers\BaseRate;


use App\Http\Resources\BaseRateCollection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BaseRate;


class BaseRateBankCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): BaseRateCollection
    {
        return new BaseRateCollection(BaseRate::all());
    }
}
