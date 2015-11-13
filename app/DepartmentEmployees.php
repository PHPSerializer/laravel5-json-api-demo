<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentEmployees extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $table = 'department_employees';

    protected $primaryKey = 'id';

    protected $attributes = ['emp_no','dept_no', 'to_date', 'from_date'];

    protected $fillable = ['emp_no','dept_no', 'to_date', 'from_date'];
}
