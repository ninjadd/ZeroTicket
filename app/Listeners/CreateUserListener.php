<?php

namespace App\Listeners;

use App\Events\CreateUserEvent;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CreateUserEvent  $event
     * @return void
     */
    public function handle(CreateUserEvent $event)
    {
        $role = Role::where('type', $event->request->role)->first();

        $user = new User();
        $user->name = $event->request->name;
        $user->email = $event->request->email;
        $user->password = Hash::make($event->request->password);
        $user->role_id = $role->id;
        $user->save();

    }
}
