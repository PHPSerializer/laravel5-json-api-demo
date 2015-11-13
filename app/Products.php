<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $attributes = [
        'supplier_ids',
        'product_code',
        'product_name',
        'description',
        'standard_cost',
        'list_price',
        'reorder_level',
        'target_level',
        'quantity_per_unit',
        'discontinued',
        'minimum_reorder_quantity',
        'category',
        'attachments',
    ];

    protected $fillable = [
        'supplier_ids',
        'product_code',
        'product_name',
        'description',
        'standard_cost',
        'list_price',
        'reorder_level',
        'target_level',
        'quantity_per_unit',
        'discontinued',
        'minimum_reorder_quantity',
        'category',
        'attachments',
    ];
}
