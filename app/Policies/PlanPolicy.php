<?php

namespace App\Policies;

use App\Models\Plan;
use App\Models\User;

class PlanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view plans');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Plan $plan): bool
    {
        return $user->hasPermissionTo('view plans');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create plans');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Plan $plan): bool
    {
        return $user->hasPermissionTo('update plans');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Plan $plan): bool
    {
        return $user->hasPermissionTo('delete plans');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Plan $plan): bool
    {
        return $user->hasPermissionTo('delete plans');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Plan $plan): bool
    {
        return $user->hasPermissionTo('delete plans');
    }
}
