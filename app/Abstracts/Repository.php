<?php

namespace App\Abstracts;

abstract class Repository
{
    protected $model;

    abstract protected function getModel();

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public function paginate()
    {
        return $this->model->paginate();
    }
}
