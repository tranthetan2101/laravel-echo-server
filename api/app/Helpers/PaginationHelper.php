<?php

namespace App\Helpers;

use \Illuminate\Database\Eloquent\Builder;

class PaginationHelper
{
    /**
     * @param Builder $query
     * @param int $page -1 is get all items
     * @param int $perPage
     * @return array ['records' => $records, 'total'=>$total, 'per_page'=> $perPage, 'current_page'=>$page]
     */
    public static function paginationQuery(Builder $query, int $page = -1, int $perPage = 30): array
    {
        $total = $query->count();
        $pageCount = max(1, ceil($total / $perPage));

        if ($page > $pageCount) {
            $page = $pageCount;
        }

        $records = [];
        if ($total > 0) {
            if ($page > 0) {
                $records = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();
            } else {
                $records = $query->get();
                $perPage = $total;
                $pageCount = 1;
            }
        }

        return array(
            'records' => $records,
            'total' => $total,
            'per_page' => $perPage,
            'current_page' => $page,
            'page_count' => $pageCount
        );
    }

    /**
     * @param array $data
     * @param int $page -1 is get all items
     * @param int $perPage
     * @return array ['records' => $records, 'total'=>$total, 'per_page'=> $perPage, 'current_page'=>$page]
     */
    public static function paginationByArray(array $data, int $page = -1, int $perPage = 30): array
    {
        $total = count($data);
        $pageCount = max(1, ceil($total / $perPage));

        if ($page > $pageCount) {
            $page = $pageCount;
        }

        if ($total > 0) {
            if ($page > 0) {
                $data = array_slice($data, ($page - 1) * $perPage, $perPage);
            } else {
                $perPage = $total;
            }
        }
        return array(
            'records' => $data,
            'total' => $total,
            'per_page' => $perPage,
            'current_page' => $page,
            'page_count' => $pageCount
        );
    }
}
