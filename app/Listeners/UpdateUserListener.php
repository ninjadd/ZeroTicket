<?php

namespace App\Listeners;

use App\Events\UpdateUserEvent;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateUserListener
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
     * @param  UpdateUserEvent  $event
     * @return void
     */
    public function handle(UpdateUserEvent $event)
    {
        $role = Role::where('type', $event->request->role)->first();
        $user = User::find($event->user->id);

        $user->name = $event->request->name;
        $user->email = $event->request->email;
        $user->password = Hash::make($event->request->password);
        $user->role_id = $role->id;
        $user->save();

    }
}
