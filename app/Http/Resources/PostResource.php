<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    // public static $wrap = 'post';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => strtoupper($this->title),
            'body' => $this->body,
            'created_at' => $this->created_at->format('Y-m-d H:i:s')
        ];
    }

    // public function with($request)
    // {
    //     return [
    //         'foo' => [
    //             'key' => 'value'
    //         ]
    //     ];
    // }
}
