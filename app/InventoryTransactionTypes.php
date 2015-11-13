<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryTransactionTypes extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'inventory_transaction_types';

    protected $primaryKey = 'id';

    protected $attributes = [
        'type_name',
    ];

    protected $fillable = [
        'type_name',
    ];
}
