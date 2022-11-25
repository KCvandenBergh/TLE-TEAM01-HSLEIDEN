<?php

namespace App\Policies;

use App\Models\Save;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class SavePolicy
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
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Save $save
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Save $save)
    {
        return $user->id === $save->user_id
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return Response::allow();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Save $save
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Save $save)
    {
        return $user->id === $save->user_id
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Save $save
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Save $save)
    {
        return $user->id === $save->user_id
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Save $save
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Save $save)
    {
        return Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Save $save
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Save $save)
    {
        return Response::denyAsNotFound();
    }
}
