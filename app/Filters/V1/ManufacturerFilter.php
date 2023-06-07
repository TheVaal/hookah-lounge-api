<?php
namespace App\Filters\V1;

use App\Filters\ApiFilter;

class ManufacturerFilter extends ApiFilter{
    protected $safeParams = [
        'name' => ['eq', 'ne']];
}