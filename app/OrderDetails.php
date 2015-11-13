<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'order_details';

    protected $primaryKey = 'id';

    protected $attributes = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'discount',
        'status_id',
        'date_allocated',
        'purchase_order_id',
        'inventory_id',
    ];

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price',
        'discount',
        'status_id',
        'date_allocated',
        'purchase_order_id',
        'inventory_id',
    ];
}
