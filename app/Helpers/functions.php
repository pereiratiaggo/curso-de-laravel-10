<?php

use App\Enums\SupportStatus;

if (!function_exists('getStatusSupport')) {
    function getStatusSupport(string $name): string
    {
        return SupportStatus::fromName($name);
    }
}
