<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class MixFilter extends ApiFilter{
    protected $safeParams = [
        'orderId' => ['eq', 'ne'],
        'weight' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte']
    ];

    protected $columnMap = [
        'orderId' => 'order_id',
    ];
}