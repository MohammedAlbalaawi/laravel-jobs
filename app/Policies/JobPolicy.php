<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

    /**
     * @param  User  $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return  $user->can('viewAny job');
    }

    /**
     * @param  User  $user
     * @param  Job  $job
     * @return bool
     */
    public function view(User $user, Job $job)
    {
        return  $user->can('view job');
    }

    /**
     * @param  User  $user
     * @return bool
     */
    public function create(User $user)
    {
        return  $user->can('create job');
    }

    /**
     * @param  User  $user
     * @param  Job  $job
     * @return bool
     */
    public function update(User $user, Job $job)
    {
        return  $user->can('update job');
    }

    /**
     * @param  User  $user
     * @param  Job  $job
     * @return bool
     */
    public function delete(User $user, Job $job)
    {
        return  $user->can('delete job');
    }
}
