<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserInfo extends JsonResource
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
            'userId'=> $this->userId,
            'userName'=> $this->userName,
            'account' => $this->account,
            'pw'=>$this->pw,
            'email'=>$this->email,
        ];
    }
}
