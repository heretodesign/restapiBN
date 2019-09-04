<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ExchangeRateCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'meta' => [
                'last_updated' => '2019-09-03T06:06:10Z',
                'total_result' => 0,
                'quote' => 'rm',
                'session' => '1130',
            ],
            'data' => $this->collection,
        ];
    }
}
