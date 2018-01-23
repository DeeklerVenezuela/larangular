<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','ver_todo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relationships
    public function Profile()
    {
        return $this->hasOne('Profile');
    }

    public function Roles()
    {
      return $this->belongsToMany(Role::class);
    }


    /*Role verification methods */
        /**
        * @param string|array $roles
    */
    public function authorizeRoles($roles)
    {
    if (is_array($roles)) {
        return $this->hasAnyRole($roles) || 
             abort(401, 'This action is unauthorized.');
    }
    return $this->hasRole($roles) || 
        abort(401, 'This action is unauthorized.');
    }
    /**
        * Check multiple roles
        * @param array $roles
    */
    public function hasAnyRole($roles)
    {
        return null !== $this->Roles()->whereIn('name', $roles)->first();
    }
    /**
        * Check one role
        * @param string $role
    */
    public function hasRole($role)
    {
        return null !== $this->Roles()->where('name', $role)->first();
    }
}
