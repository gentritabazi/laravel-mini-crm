<?php

namespace App\Models\Companies;

use App\Abstracts\Model;
use App\Models\Employees\Employee;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'logo',
        'address',
        'website'
    ];

    /**
     * Get employees.
     */
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
