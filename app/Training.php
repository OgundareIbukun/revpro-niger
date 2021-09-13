<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    //
    use SoftDeletes;
    protected $guarded =[];

    /**
     * Get the url.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
     //   return "{$this->first_name} {$this->last_name}";
          if($this->attributes['type'] == 'video'){
              return "/uploads/video/";

          }else {
                  return "/uploads/doc/";
          }
    }
}
