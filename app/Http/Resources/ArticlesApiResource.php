<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticlesApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'author'=>$this->author
        ];
    }
    public function with($request){
        return [
            'author'=>'Dickens Odera',
            'github_url'=>'https:github.com/Dickens-odera',
            'social'=>array(
                'facebook'=>'Dickens Odera',
                'twitter'=>'@dickensodera',
                'linkedin'=>'Dickens Odera'
            )
            
        ];
    }
}
