<?php

namespace App\Abstracts;

use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class Model extends BaseModel
{
    /**
     * The number of items to be shown per page in pagination.
     *
     * @var string
     */
    protected $perPage = 10;
}
