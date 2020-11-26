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

    public function create($data)
    {
        return $this->companyRepository->create($data);
    }

    public function update($id, $data)
    {
        $company = $this->companyRepository->getById($id);

        return $this->companyRepository->update($company, $data);
    }

    public function delete($id)
    {
        return $this->companyRepository->delete($id);
    }
}
