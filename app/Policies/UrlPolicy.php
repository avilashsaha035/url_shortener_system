<?php

namespace App\Policies;

use App\Models\Url;
use App\Models\User;

class UrlPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function view(User $user, Url $url): bool
    {
        return $user->id == $url->user_id;
    }

    public function create(User $user, Url $url): bool
    {
        return $user->id == $url->user_id;
    }

    public function update(User $user, Url $url): bool
    {
        return $user->id == $url->user_id;
    }

    public function delete(User $user, Url $url): bool
    {
        return $user->id == $url->user_id;
    }
}
