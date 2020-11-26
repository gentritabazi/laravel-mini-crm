<?php

namespace App\Repositories\Companies;

use App\Models\Companies\Company;
use App\Abstracts\Repository;

class CompanyRepository extends Repository
{
    public function getModel()
    {
        return new Company();
    }

    public function create(array $data)
    {
        $company = $this->getModel();

        $company->fill($data);

        $company->save();

        return $company;
    }

    public function update(Company $company, array $data)
    {
        $company->fill($data);

        $company->save();

        return $company;
    }

    public function delete(Company $company)
    {
        $company->delete();

        return true;
    }
}
