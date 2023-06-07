<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class InOrderFilter extends ApiFilter{
    protected $safeParams = [
        'orderId' => ['eq', 'ne'],
        'guestNumber' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'loungeMenuId' => ['eq', 'ne'],
        'quantity' => ['eq', 'ne']
    ];

    protected $columnMap =[
        'orderId' => 'order_id',
        'guestNumber' => 'guest_number',
        'loungeMenuId' => 'lounge_menu_id',
    ];
    
}