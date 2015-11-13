<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titles extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $table = 'titles';

    protected $primaryKey = 'id';

    protected $attributes = ['emp_no', 'title', 'from_date', 'to_date'];

    protected $fillable = ['emp_no', 'title', 'from_date', 'to_date'];
}
