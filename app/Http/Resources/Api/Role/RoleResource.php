<?php

namespace App\Http\Resources\Api\Role;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'guard' => $this->guard_name,
            'permissions' => $this->permissions->pluck('name')
        ];
    }
}
