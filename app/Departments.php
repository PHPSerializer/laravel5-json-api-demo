<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $table = 'departments';

    protected $primaryKey = 'dept_no';

    protected $attributes = ['dept_name'];

    protected $fillable = ['dept_name'];
}
