<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class LoungeMenuFilter extends ApiFilter{
    protected $safeParams = [
        'menuId' => ['eq', 'ne'],
        'loungeId' => ['eq', 'ne'],
        'price' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte']
    ];

    protected $columnMap = [
        'menuId' => 'menu_id',
        'loungeId' => 'lounge_id',
    ];
}