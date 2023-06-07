<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class MenuFilter extends ApiFilter{
    protected $safeParams = [
        'name' => ['eq', 'ne']];
}