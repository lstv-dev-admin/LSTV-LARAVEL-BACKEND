<?php

namespace App\Repositories\Utilities;

use App\Interfaces\Utilities\UserFilesInterface;

use App\Models\Utilities\UserFiles\{
    User,
    UserType,
    Status
};

class UserFilesRepository implements UserFilesInterface
{
    public function createUser($data)
    {
        return User::create($data);
    }

    public function getUsers($filters)
    {
        $page = $filters['page'] ?? 1;
        $perPage = $filters['per_page'] ?? 10;
        $sortBy = $filters['sort_by'] ?? 'id';
        $sortOrder = $filters['sort_order'] ?? 'asc';
        $search = $filters['search'] ?? ''; 


        $sortBy = in_array($sortBy, [
            'id', 'username', 'user_type_id', 'first_name', 'middle_name', 'last_name', 'email'
        ]) ? $sortBy : 'id';

        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'asc';

        $query = User::query();

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('username', 'like', "%{$search}%")
                ->orWhere('user_type_id', 'like', "%{$search}%")
                ->orWhere('first_name', 'like', "%{$search}%")
                ->orWhere('middle_name', 'like', "%{$search}%")
                ->orWhere('last_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%");
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

    public function updateUser($id, $data)
    {
        User::findOrFail($id)->update($data);
        return User::findOrFail($id);
    }

    public function getUserTypes() {
        return UserType::all();
    }

    public function getStatuses() {
        return Status::all();
    }
}