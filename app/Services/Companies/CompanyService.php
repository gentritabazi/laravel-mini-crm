<?php

namespace App\Services\Companies;

use App\Repositories\Companies\CompanyRepository;

class CompanyService
{
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function paginate()
    {
        return $this->companyRepository->paginate();
    }

    public function getById($id)
    {
        return $this->companyRepository->getById($id);
    }
}
