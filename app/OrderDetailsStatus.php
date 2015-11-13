<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailsStatus extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'order_details_status';

    protected $primaryKey = 'id';

    protected $attributes = [
        'status_name'
    ];

    protected $fillable = [
        'status_name'
    ];
}
