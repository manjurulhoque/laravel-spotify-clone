<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];

    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }
}
