<?php

namespace App\Http\Controllers\KlUsdReferenceRate;

use App\Http\Resources\KlUsdReferenceRateResource;
use App\Http\Resources\KlUsdReferenceRateCollection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KlUsdReferenceRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): KlUsdReferenceRateCollection
    {
        //
        return new KlUsdReferenceRateCollection(KlUsdReferenceRate::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(KlUsdReferenceRate $klUsdReferenceRate): KlUsdReferenceRateResource
    {
        return new KlUsdReferenceRateResource($klUsdReferenceRate);
    }

}
