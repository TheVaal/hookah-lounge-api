<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class TobaccoFilter extends ApiFilter{
    protected $safeParams = [
        'name' => ['eq', 'ne']];
}