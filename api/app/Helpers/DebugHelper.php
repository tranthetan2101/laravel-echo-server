<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\Facades\Log;

class DebugHelper
{
    public static function getSQL(EloquentBuilder|QueryBuilder $builder): string|null
    {
        $sql = $builder->toSql();
        foreach ($builder->getBindings() as $binding) {
            $value = is_numeric($binding) ? $binding : "'" . $binding . "'";
            $sql = preg_replace('/\?/', $value, $sql, 1);
        }
        return $sql;
    }

    public static function logMemoryUsage(): void
    {
        $bytes = memory_get_usage();
        $kilobytes = $bytes / 1024;
        Log::debug('memory usage: ' . $kilobytes . ' KB');
    }
}
