<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrders extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'purchase_orders';

    protected $primaryKey = 'id';

    protected $attributes = [
        'supplier_id',
        'created_by',
        'submitted_date',
        'creation_date',
        'status_id',
        'expected_date',
        'shipping_fee',
        'taxes',
        'payment_date',
        'payment_amount',
        'payment_method',
        'notes',
        'approved_by',
        'approved_date',
        'submitted_by',
    ];

    protected $fillable = [
        'supplier_id',
        'created_by',
        'submitted_date',
        'creation_date',
        'status_id',
        'expected_date',
        'shipping_fee',
        'taxes',
        'payment_date',
        'payment_amount',
        'payment_method',
        'notes',
        'approved_by',
        'approved_date',
        'submitted_by',
    ];
}
