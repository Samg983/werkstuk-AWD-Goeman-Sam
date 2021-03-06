<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id')->withTimestamps();
    }

    /**
     * @param string|array $roles
     */

    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) || redirect('/welcome')->with('status', 'Unauthorized!');
        }
        return $this->hasRole($roles) || redirect('/welcome')->with('status', 'Unauthorized!');
    }

    /**
     * Check multiple roles
     * @param array $roles
     */

    public function hasAnyRole($roles)

    {

        return null !== $this->roles()->whereIn('name', $roles)->first();

    }

    /**
     * Check one role
     * @param string $role
     */

    public function hasRole($role)

    {

        return null !== $this->roles()->where('name', $role)->first();

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
