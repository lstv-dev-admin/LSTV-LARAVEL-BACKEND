<?php

namespace App\Repositories\Utilities;

use App\Interfaces\Utilities\UserFilesInterface;

use App\Models\Utilities\UserFiles\{
    User,
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

        $sortBy = in_array($sortBy, ['id', 'username', 'user_type_id', 'first_name', 'middle_name', 'last_name', 'email']) ? $sortBy : 'id';
        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortBy : 'asc';

        $query = User::query();

        if (!empty($search)) {
            $query->where('username', 'like', '%' . $search . '%')
            ->orWhere('user_type_id', 'like', '%' . $search . '%')
            ->orWhere('first_name', 'like', '%' . $search . '%')
            ->orWhere('middle_name', 'like', '%' . $search . '%')
            ->orWhere('last_name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orderBy($sortBy, $sortOrder)
            ->paginate($perPage, ['*'], 'page', $page);
        }

        return $query->orderBy($sortBy, $sortOrder)
            ->paginate($perPage, ['*'], 'page', $page);
    }

    public function updateUser($id, $data)
    {
        User::findOrFail($id)->update($data);
    }
}