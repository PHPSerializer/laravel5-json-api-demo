<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderDetails extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'purchase_order_details';

    protected $primaryKey = 'id';

    protected $attributes = [
        'purchase_order_id',
        'product_id',
        'quantity',
        'unit_cost',
        'date_received',
        'posted_to_inventory',
        'inventory_id',
    ];

    protected $fillable = [
        'purchase_order_id',
        'product_id',
        'quantity',
        'unit_cost',
        'date_received',
        'posted_to_inventory',
        'inventory_id',
    ];
}
