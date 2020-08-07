<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class HotelsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return parent::toArray($request);
            // return [

            //      'from_date'        => $this->from_date,
            //      'to_date'          => $this->to_date,
            //      'city'             => $this->city,
            //      'adults_number'    => $this->adults_number,
     
            //    ];
     
    }
}
