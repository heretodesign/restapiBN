<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BaseRateCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function with($request)
    {
        return [
          "last_updated" => "2019-09-03T06:06:10Z",
          "total_result" => 0,
          "effective_date" => "2019-09-03",  //date("D, Y M d H:i:s")
        ];
    }
}
