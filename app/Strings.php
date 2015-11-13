<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strings extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'strings';

    protected $primaryKey = 'string_id';

    protected $attributes = [
        'string_data'
    ];

    protected $fillable = [
        'string_data'
    ];
}
