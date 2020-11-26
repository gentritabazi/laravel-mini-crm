<?php

namespace App\Repositories\Employees;

use App\Models\Employees\Employee;
use App\Abstracts\Repository;

class EmployeeRepository extends Repository
{
    public function getModel()
    {
        return new Employee();
    }

    public function create(array $data)
    {
        $employee = $this->getModel();

        $employee->fill($data);

        $employee->save();

        return $employee;
    }

    public function update(Employee $employee, array $data)
    {
        $employee->fill($data);

        $employee->save();

        return $employee;
    }

    public function delete(Employee $employee)
    {
        $employee->delete();

        return true;
    }
}
