<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can see the roles.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  \App\Models\User  $user
     * @return boolean
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the role.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Role  $role
     * @return boolean
     */
    public function update(User $user, Role $role)
    {
        return $user->isAdmin();
    }
}
