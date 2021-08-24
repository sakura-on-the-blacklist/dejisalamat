<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    function review_ratings()
    {
        return $this->hasMany(('App\Rating'))
                    ->pluck('rating');
    }
}
