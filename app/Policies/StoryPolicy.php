<?php

namespace App\Policies;

use App\Models\Story;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class StoryPolicy
{
    use HandlesAuthorization;

    public function before(User $user){
        if($user->is_admin){
            return Response::allow();
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function viewAny(User $user)
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Story $story
     * @return Response|bool
     */
    public function view(User $user, Story $story)
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function create(User $user)
    {
        return $user->is_admin
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Story $story
     * @return Response|bool
     */
    public function update(User $user, Story $story)
    {
        return $user->is_admin
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Story $story
     * @return Response|bool
     */
    public function delete(User $user, Story $story)
    {
        return $user->is_admin
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Story $story
     * @return Response|bool
     */
    public function restore(User $user, Story $story)
    {
        return $user->is_admin
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Story $story
     * @return Response|bool
     */
    public function forceDelete(User $user, Story $story)
    {
        return $user->is_admin
            ? Response::allow()
            : Response::denyAsNotFound();
    }
}
