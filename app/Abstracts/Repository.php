<?php

namespace App\Abstracts;

abstract class Repository
{
    protected $model;

    protected $sortProperty = 'id';

    protected $sortDirection = 'DESC';

    abstract protected function getModel();

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public function get()
    {
        return $this->model->orderBy($this->sortProperty, $this->sortDirection)->get();
    }

    public function paginate()
    {
        return $this->model->orderBy($this->sortProperty, $this->sortDirection)->paginate();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }
}
