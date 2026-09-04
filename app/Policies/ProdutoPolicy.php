<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\Produto;
use App\Models\User;

class ProdutoPolicy
{
    /**
     * Create a new policy instance.
     */

    public function view(): bool
    {
        return true;
    }

    public function viewAll(): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->role === UserRole::ADMIN;
    }

    public function edit(User $user, Produto $produto): bool
    {
        return $user->role === UserRole::ADMIN && $produto->user_id === $user->id;
    }

    public function delete(User $user, Produto $produto): bool
    {
        return $user->role === UserRole::ADMIN && $produto->user_id === $user->id;
    }
}
