<?php

namespace App\Policies;

use App\Models\Publication;
use Illuminate\Auth\Access\Response;
use App\Models\Publication5;
use Illuminate\Auth\GenericUser;

class PublicationPolicy
{
    /**
     * Determine whether the GenericUser can view any models.
     */
    public function viewAny(GenericUser $user): bool
    {
        //
    }

    /**
     * Determine whether the GenericUser can view the model.
     */
    public function view(GenericUser $user, Publication $publication): bool
    {
        //
    }

    /**
     * Determine whether the GenericUser can create models.
     */
    public function create(GenericUser $user): bool
    {
        //
    }

    /**
     * Determine whether the GenericUser can update the model.
     */
    public function update(GenericUser $user, Publication $publication): bool
    {
        return $user->id === $publication->profile_id ;

    }

    /**
     * Determine whether the GenericUser can delete the model.
     */
    public function delete(GenericUser $user, Publication $publication): bool
    {
        return $user->id === $publication->profile_id ;
    }

    /**
     * Determine whether the GenericUser can restore the model.
     */
    public function restore(GenericUser $user, Publication $publication): bool
    {
        //
    }

    /**
     * Determine whether the GenericUser can permanently delete the model.
     */
    public function forceDelete(GenericUser $user, Publication $publication): bool
    {
        //
    }
}
