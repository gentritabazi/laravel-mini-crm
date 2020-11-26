<?php

namespace App\Services\Employees;

use App\Services\Companies\CompanyService;
use App\Repositories\Employees\EmployeeRepository;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class EmployeeService
{
    private $employeeRepository;

    private $companyService;

    public function __construct(EmployeeRepository $employeeRepository, CompanyService $companyService)
    {
        $this->employeeRepository = $employeeRepository;
        $this->companyService = $companyService;
    }

    public function paginate()
    {
        return $this->employeeRepository->paginate();
    }

    public function getById($id)
    {
        return $this->employeeRepository->getById($id);
    }

    public function create($data)
    {
        $company = $this->companyService->getById($data['company_id']);

        if (is_null($company)) {
            throw new UnprocessableEntityHttpException('Selected company is invalid.');
        }

        $employee = $this->employeeRepository->create($data);

        return $employee;
    }

    public function update($id, $data)
    {
        $employee = $this->employeeRepository->getById($id);

        return $this->employeeRepository->update($employee, $data);
    }

    public function delete($id)
    {
        $employee = $this->employeeRepository->getById($id);

        $employeeDeleted = $this->employeeRepository->delete($employee);

        return true;
    }
}
