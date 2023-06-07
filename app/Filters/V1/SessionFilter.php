<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class SessionFilter extends ApiFilter{
    protected $safeParams = [
        'loungeId' => ['eq', 'ne'],
        'ownerId' => ['eq', 'ne'],
        'accessCode' => ['eq', 'ne'],
        'bookingDate' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'status' => ['eq', 'ne'],
    ];

    protected $columnMap = [
        'loungeId' => 'lounge_id',
        'ownerId' => 'owner_id',
        'bookingDate' => 'booking_date',
    ];
}