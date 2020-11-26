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

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}
