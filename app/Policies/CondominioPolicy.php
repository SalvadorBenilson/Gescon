<?php

namespace App\Policies;

use App\Models\Condominio;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CondominioPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Condominio $condominio)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Condominio $condominio)
    {
        //
        return $condominio->user->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Condominio $condominio)
    {
        //
        return $this->update($user, $condominio);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Condominio $condominio)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condominio  $condominio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Condominio $condominio)
    {
        //
    }
}
