<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class LoungeTobaccoFilter extends ApiFilter{
    protected $safeParams = [
        'tobaccoId' => ['eq', 'ne'],
        'loungeId' => ['eq', 'ne'],
        'price' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte']
    ];

    protected $columnMap = [
        'tobaccoId' => 'tobacco_id',
        'loungeId' => 'lounge_id',
    ];
}