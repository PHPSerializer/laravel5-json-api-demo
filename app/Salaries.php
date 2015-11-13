<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $table = 'salaries';

    protected $primaryKey = 'id';

    protected $attributes = ['emp_no','salary','from_date','to_date',];

    protected $fillable = ['emp_no','salary','from_date','to_date',];
}
