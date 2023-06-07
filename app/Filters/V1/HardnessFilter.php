<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class HardnessFilter extends ApiFilter{
    protected $safeParams = [
        'name' => ['eq', 'ne']
    ];
}