<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'orders_status';

    protected $primaryKey = 'id';

    protected $attributes = [
        'status_name'
    ];

    protected $fillable = [
        'status_name'
    ];
}
