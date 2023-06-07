<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class TableFilter extends ApiFilter{
    protected $safeParams = [
        'loungeId' => ['eq', 'ne'],
        'name' => ['eq', 'ne'],
        'seats' => ['eq', 'ne'],
    ];

    protected $columnMap = [
        'loungeId' => 'lounge_id',
    ];
}