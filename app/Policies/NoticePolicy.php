<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NoticePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function updateNotice($user, $notice)
    {
        return $user->id == $notice->user_id;
    }

    public function before($user)
    {
        return $user->name == 'Admin';
    }
}
