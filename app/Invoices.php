<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'invoices';

    protected $primaryKey = 'id';

    protected $attributes = [
        'order_id',
        'invoice_date',
        'due_date',
        'tax',
        'shipping',
        'amount_due',
    ];

    protected $fillable = [
        'order_id',
        'invoice_date',
        'due_date',
        'tax',
        'shipping',
        'amount_due',
    ];
}
