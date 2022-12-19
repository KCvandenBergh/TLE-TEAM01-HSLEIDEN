<?php

namespace App\Policies;

use App\Models\Scenario;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ScenarioPolicy
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
    public function viewAny(?User $user)
    {
        return Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Scenario $scenario
     * @return Response|bool
     */
    public function view(?User $user, Scenario $scenario)
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
     * @param Scenario $scenario
     * @return Response|bool
     */
    public function update(User $user, Scenario $scenario)
    {
        return $user->is_admin
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Scenario $scenario
     * @return Response|bool
     */
    public function delete(User $user, Scenario $scenario)
    {
        return $user->is_admin
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Scenario $scenario
     * @return Response|bool
     */
    public function restore(User $user, Scenario $scenario)
    {
        return $user->is_admin
            ? Response::allow()
            : Response::denyAsNotFound();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Scenario $scenario
     * @return Response|bool
     */
    public function forceDelete(User $user, Scenario $scenario)
    {
        return $user->is_admin
            ? Response::allow()
            : Response::denyAsNotFound();
    }
}
