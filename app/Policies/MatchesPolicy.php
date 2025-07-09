<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Matches;
use Illuminate\Auth\Access\HandlesAuthorization;

class MatchesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Admin can view any matches
        if ($user->hasRole('admin')) {
            return true;
        }

        // Regular users can view matches
        return $user->hasPermissionTo('matches.view.any');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Matches $matches): bool
    {
        // Admin can view any matches
        if ($user->hasRole('admin')) {
            return true;
        }

        // Regular users can view matches
        return $user->hasPermissionTo('matches.view.any');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Only admins can create matches
        return $user->hasPermissionTo('matches.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Matches $matches): bool
    {
        // Only admins can update matches
        return $user->hasPermissionTo('matches.update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Matches $matches): bool
    {
        // Only admins can delete matches
        return $user->hasPermissionTo('matches.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Matches $matches): bool
    {
        // Only admins can restore matches
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Matches $matches): bool
    {
        // Only admins can force delete matches
        return $user->hasRole('admin');
    }
}
