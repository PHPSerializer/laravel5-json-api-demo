<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $table = 'employees';

    protected $primaryKey = 'emp_no';

    protected $attributes = ['birth_date', 'first_name', 'last_name', 'gender', 'hire_date', ];

    protected $fillable = ['birth_date', 'first_name', 'last_name', 'gender', 'hire_date', ];
}
