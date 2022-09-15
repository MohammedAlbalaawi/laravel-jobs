<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * @param  User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return  $user->can('viewAny role');
    }

    /**
     * @param  User  $user
     * @param  Role  $role
     * @return bool
     */
    public function view(User $user, Role $role)
    {
        return  $user->can('view role');
    }

    /**
     * @param  User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return  $user->can('create role');
    }

    /**
     * @param  User  $user
     * @param  Role  $role
     * @return bool
     */
    public function update(User $user, Role $role)
    {
        return  $user->can('update role');
    }

    /**
     * @param  User  $user
     * @param  Role  $role
     * @return bool
     */
    public function delete(User $user, Role $role)
    {
        return  $user->can('delete role');
    }
}
