<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class WaiterCallFilter extends ApiFilter{
    protected $safeParams = [
        'tableId' => ['eq', 'ne'],
        'sessionId' => ['eq', 'ne'],
        'answered' => ['eq', 'ne'],
    ];

    protected $columnMap = [
        'sessionId' => 'session_id',
        'tableId' => 'table_id',
    ];
}