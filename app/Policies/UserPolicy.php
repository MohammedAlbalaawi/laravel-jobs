<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return  $user->can('viewAny user');
    }

    /**
     * @param User $user
     * @param User $model
     * @return bool
     */
    public function view(User $user, User $model)
    {
        return  $user->can('view user');
    }

    /**
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        return  $user->can('create user');
    }

    /**
     * @param User $user
     * @param User $model
     * @return bool
     */
    public function update(User $user, User $model)
    {
        return  $user->can('update user');
    }

    /**
     * @param User $user
     * @param User $model
     * @return bool
     */
    public function delete(User $user, User $model)
    {
        return  $user->can('delete user');
    }
}
