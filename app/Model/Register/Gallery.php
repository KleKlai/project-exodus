<?php

namespace App\Model\Register;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'name', 'description'
    ];
}
