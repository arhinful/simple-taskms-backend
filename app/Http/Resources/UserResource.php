<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->name,
            "uuid" => $this->uuid,
            "slug" => $this->slug,
            "name" => $this->name,
            "email" => $this->email,
            "tasks" => TaskResource::collection($this->whenLoaded('tasks')),
            "created_at" => $this->created_at,
        ];
    }
}
