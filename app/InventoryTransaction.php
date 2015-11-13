<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryTransaction extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'inventory_transaction';

    protected $primaryKey = 'id';

    protected $attributes = [
        'transaction_type',
        'transaction_created_date',
        'transaction_modified_date',
        'product_id',
        'quantity',
        'purchase_order_id',
        'customer_order_id',
        'comments',
    ];

    protected $fillable = [
        'transaction_type',
        'transaction_created_date',
        'transaction_modified_date',
        'product_id',
        'quantity',
        'purchase_order_id',
        'customer_order_id',
        'comments',
    ];
}
