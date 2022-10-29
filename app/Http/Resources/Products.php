<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Products extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'             => $this->id,
            'DS_NAME'        => $this->DS_NAME,
            'DS_DESCRIPTION' => $this->DS_DESCRIPTION,
            'DS_BRAND'       => $this->DS_BRAND,
            'NM_CODE'        => $this->NM_BAR_CODE,
            'NM_TENSION'     => $this->NM_TENSION,
            'NM_VALUE'       => $this->NM_VALUE,
            'FL_STATUS'      => $this->FL_STATUS
        ];
    }
}
