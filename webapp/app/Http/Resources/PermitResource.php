<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PermitResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            "cnt" => $this->cnt,
            "dst" => $this->dst,
            "emp" => $this->emp,
            "fch"  => $this->fch,
            "ini" => $this->ini,
            "fin" => $this->fin,
            "obs" => $this->obs,
            "sta" => $this->sta,
            "tpo" => $this->tpo
        ];
    }
}
