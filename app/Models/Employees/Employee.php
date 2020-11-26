<?php

namespace App\Models\Employees;

use App\Abstracts\Model;
use App\Models\Companies\Company;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'company_id',
        'email',
        'phone'
    ];

    /**
     * Get company.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
