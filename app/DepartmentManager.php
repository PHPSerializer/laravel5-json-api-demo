<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentManager extends Model
{
    public $timestamps = false;
    public $incrementing = false;

    protected $table = 'department_manager';

    protected $primaryKey = 'id';

    protected $attributes = ['from_date', 'to_date', 'emp_no','dept_no'];

    protected $fillable = ['from_date', 'to_date', 'emp_no','dept_no'];
}
