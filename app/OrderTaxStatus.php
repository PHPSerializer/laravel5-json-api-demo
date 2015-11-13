<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTaxStatus extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'orders_tax_status';

    protected $primaryKey = 'id';

    protected $attributes = [
        'tax_status_name'
    ];

    protected $fillable = [
        'tax_status_name'
    ];
}
