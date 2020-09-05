<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = [];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
