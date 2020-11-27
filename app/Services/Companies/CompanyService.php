<?php

namespace App\Services\Companies;

use Illuminate\Support\Facades\Storage;
use App\Repositories\Companies\CompanyRepository;

class CompanyService
{
    private $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function get()
    {
        return $this->companyRepository->get();
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
        if (isset($data['logo'])) {
            $logo = Storage::put('public', $data['logo']);

            $data['logo'] = basename($logo);
        }

        $company = $this->companyRepository->create($data);

        return $company;
    }

    public function update($id, $data)
    {
        $company = $this->companyRepository->getById($id);

        return $this->companyRepository->update($company, $data);
    }

    public function delete($id)
    {
        $company = $this->companyRepository->getById($id);
        $companyLogo = $company->logo;

        $companyDeleted = $this->companyRepository->delete($company);

        if ($companyDeleted && $companyLogo) {
            Storage::delete('public/'. $companyLogo);
        }

        return true;
    }
}
