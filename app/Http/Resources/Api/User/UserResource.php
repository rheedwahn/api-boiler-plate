<?php

namespace App\Http\Resources\Api\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'email' => $this->email,
            'last_login' => date('Y-m-d', strtotime($this->last_login)),
            'profile' => new ProfileResource($this->profile),
            'role' => $this->getRoleNames(),
            'status' => $this->status
        ];
    }
}
