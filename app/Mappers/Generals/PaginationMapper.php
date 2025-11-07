<?php 

namespace App\Mappers\Generals;

class PaginationMapper
{
    public static function mapToResponse($paginated)
    {
        return [
            'items' => $paginated->items(),
            'items_per_page' => $paginated->perPage(),
            'total_pages' => $paginated->lastPage(),
            'current_page' => $paginated->currentPage(),
            'next_page' => $paginated->currentPage() < $paginated->lastPage()
                            ? $paginated->currentPage() + 1
                            : null,
            'previous_page' => $paginated->currentPage() > 1
                            ? $paginated->currentPage() - 1
                            : null,
            'has_next_page' => $paginated->hasMorePages(),
            'has_previous_page' => $paginated->currentPage() > 1,
        ];
    }
}