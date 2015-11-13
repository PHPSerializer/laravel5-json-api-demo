<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderStatus extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'purchase_order_status';

    protected $primaryKey = 'id';

    protected $attributes = [
        'status'
    ];

    protected $fillable = [
        'status'
    ];
}
