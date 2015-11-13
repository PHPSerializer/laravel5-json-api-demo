<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesReports extends Model
{
    public $timestamps = false;

    public $incrementing = true;

    protected $table = 'sales_reports';

    protected $primaryKey = 'id';

    protected $attributes = [
        'group_by',
        'display',
        'title',
        'filter_row_source',
        'default',
    ];

    protected $fillable = [
        'group_by',
        'display',
        'title',
        'filter_row_source',
        'default',
    ];
}
