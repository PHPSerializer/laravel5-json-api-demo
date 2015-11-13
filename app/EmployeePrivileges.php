<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeePrivileges extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $table = 'employee_id';

    protected $primaryKey = 'employee_id';

    protected $attributes = [
        'employee_id',
        'privilege_id',
    ];

    protected $fillable = [
        'employee_id',
        'privilege_id',
    ];
}
