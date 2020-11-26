<?php

namespace App\Http\Controllers\Companies;

use App\Abstracts\Controller;
use App\Services\Companies\CompanyService;
use App\Http\Requests\Companies\CompanyCreateRequest;
use App\Http\Requests\Companies\CompanyUpdateRequest;

class CompanyController extends Controller
{
    private $companyService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->companyService->paginate();

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Companies\CompanyCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyCreateRequest $request)
    {
        $company = $this->companyService->create($request->validated());

        return redirect()->route('companies.index')->with('success', 'The process was successfully completed.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = $this->companyService->getById($id);

        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = $this->companyService->getById($id);

        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Companies\CompanyUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyUpdateRequest $request, $id)
    {
        $company = $this->companyService->update($id, $request->validated());

        return redirect()->route('companies.index')->with('success', 'The process was successfully completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = $this->companyService->delete($id);

        return redirect()->route('companies.index')->with('success', 'The process was successfully completed.');
    }
}
