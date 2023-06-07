<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class LoungeFilter extends ApiFilter{
    protected $safeParams = [
        'name' => ['eq', 'ne'],
        'address' => ['eq', 'ne'],
        'city' => ['eq', 'ne'],
        'state' => ['eq', 'ne'],
        'country' => ['eq', 'ne'],
        'postalCode' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte']
    ];

    protected $columnMap =[
        'postalCode' => 'postal_code',
    ];
        
}