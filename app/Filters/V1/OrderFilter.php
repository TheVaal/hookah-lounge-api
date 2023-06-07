<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class OrderFilter extends ApiFilter{
    protected $safeParams = [
        'loungeId' => ['eq', 'ne'],
        'tableId' => ['eq', 'ne'],
        'sessionId' => ['eq', 'ne'],
        'sum' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'status' => ['eq', 'ne'],
        'closed' => ['eq', 'ne'],
    ];

    protected $columnMap = [
        'loungeId' => 'lounge_id',
        'tableId' => 'table_id',
        'sessionId' => 'session_id',
    ];
}