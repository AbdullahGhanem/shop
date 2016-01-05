<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;

class User extends Model implements AuthenticatableContract,
                                    CanResetPasswordContract,
                                    HasRoleAndPermissionContract {

    use Authenticatable, CanResetPassword, HasRoleAndPermission;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','username', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
    * A User can create many Answers.
    *
    * @var elquent collection
    */
    public function reviews() 
    {
        return $this->hasMany('App\Review');
    }

    /**
    * A User has one profile.
    *
    * @var elquent collection
    */
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    /**
     * Get the comments for the blog post.
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
