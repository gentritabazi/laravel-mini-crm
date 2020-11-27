<?php

namespace App\Http\Controllers\Employees;

use App\Abstracts\Controller;
use App\Services\Employees\EmployeeService;
use App\Http\Requests\Employees\EmployeeCreateRequest;
use App\Http\Requests\Employees\EmployeeUpdateRequest;
use App\Services\Companies\CompanyService;

class EmployeeController extends Controller
{
    private $employeeService;
    private $companyService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmployeeService $employeeService, CompanyService $companyService)
    {
        $this->employeeService = $employeeService;
        $this->companyService = $companyService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employeeService->paginate();

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = $this->companyService->get();

        return view('employees.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Employees\EmployeeCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeCreateRequest $request)
    {
        $employee = $this->employeeService->create($request->validated());

        return redirect()->route('employees.index')->with('success', 'The process was successfully completed.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = $this->employeeService->getById($id);

        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = $this->companyService->get();
        $employee = $this->employeeService->getById($id);

        return view('employees.edit', compact('employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Employees\EmployeeUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdateRequest $request, $id)
    {
        $employee = $this->employeeService->update($id, $request->validated());

        return redirect()->route('employees.index')->with('success', 'The process was successfully completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = $this->employeeService->delete($id);

        return redirect()->route('employees.index')->with('success', 'The process was successfully completed.');
    }
}
