<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserManagementPolicy
{
    use HandlesAuthorization;

    public function manage(User $user)
    {
        return $user->role_id === 1
            ? Response::allow()
            : Response::deny('You do not belong here!');
    }
}
