<?php

namespace App\Services\Employees;

use App\Repositories\Employees\EmployeeRepository;

class EmployeeService
{
    private $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
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
