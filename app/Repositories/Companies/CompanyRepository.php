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
}
