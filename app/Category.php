<?php

namespace App;

use App\City;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['city_id', 'name'];

    public function city() {
        return $this->belongsTo(City::class);
    }
}