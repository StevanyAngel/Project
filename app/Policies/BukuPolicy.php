<?php

namespace App\Policies;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BukuPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Buku  $buku
     * @return mixed
     */
    public function view(User $user, Buku $buku)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->email === 'handikacastello39@mhs.mdp.ac.id';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Buku  $buku
     * @return mixed
     */
    public function update(User $user, Buku $buku)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Buku  $buku
     * @return mixed
     */
    public function delete(User $user, Buku $buku)
    {
        return in_array($user->email,[
            'handikacastello39@mhs.mdp.ac.id'
        ]);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Buku  $buku
     * @return mixed
     */
    public function restore(User $user, Buku $buku)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Buku  $buku
     * @return mixed
     */
    public function forceDelete(User $user, Buku $buku)
    {
        //
    }
}
