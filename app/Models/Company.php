<?php

namespace App\Models;

use App\Abstracts\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'logo',
        'address',
        'website'
    ];
}
