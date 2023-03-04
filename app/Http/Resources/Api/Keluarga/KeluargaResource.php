<?php

namespace App\Http\Resources\Api\Keluarga;

use Illuminate\Http\Resources\Json\JsonResource;

class KeluargaResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'nama'       => $this->nama,
            'orang_tua'  => isset($this->getName->nama) ? $this->getName->nama : null,
            'created_at' => $this->createdAt($this->created_at)
        ];
    }
}
