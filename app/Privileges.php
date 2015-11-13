<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privileges extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'privileges';

    protected $primaryKey = 'id';

    protected $attributes = [
        'privilege_name'
    ];

    protected $fillable = [
        'privilege_name'
    ];
}
