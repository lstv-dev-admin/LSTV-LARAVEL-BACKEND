<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Schema;

use App\Mappers\Generals\PaginationMapper;

class PaginationHelper
{
    public static function render($modelClass, $filters, $searchableColumns = [])
    {
        if (!class_exists($modelClass)) {
            throw new \InvalidArgumentException("Model Not Found: {$modelClass}");
        }

        $page = $filters['page'] ?? 1;
        $perPage = $filters['per_page'] ?? 10;
        $sortBy = $filters['sort_by'] ?? 'record_id';
        $sortOrder = $filters['sort_order'] ?? 'asc';
        $search = $filters['search'] ?? '';

        $model = new $modelClass;
        $tableColumns = Schema::getColumnListing($model->getTable());

        if (!in_array($sortBy, $tableColumns)) {
            $sortBy = 'record_id';
        }

        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'asc';

        $query = $modelClass::query();

        if (!empty($search) && !empty($searchableColumns)) {
            $query->where(function ($q) use ($search, $searchableColumns) {
                foreach ($searchableColumns as $column) {
                    $q->orWhere($column, 'like', "%{$search}%");
                }
            });
        }

        $paginated = $query->orderBy($sortBy, $sortOrder)
            ->paginate($perPage, ['*'], 'page', $page);

        if ($paginated->isEmpty() && $page > 1) {
            $lastPage = $paginated->lastPage();
            if ($lastPage < $page) {
                $paginated = $query->orderBy($sortBy, $sortOrder)
                    ->paginate($perPage, ['*'], 'page', $lastPage);
            }
        }

        return PaginationMapper::mapToResponse($paginated);
    }
}
