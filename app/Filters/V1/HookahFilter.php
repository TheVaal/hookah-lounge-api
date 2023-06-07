<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class HookahFilter extends ApiFilter{
    protected $safeParams = [
        'mixId' => ['eq', 'ne'],
        'weight' => ['eq', 'ne', 'lt', 'lte', 'gt', 'gte'],
        'loungeTobaccoId' => ['eq', 'ne']
    ];
    protected $columnMap =[
        'loungeTobaccoId' => 'lounge_tobacco_id',
        
        'mixId' => 'mix_id',
    ];
        
}