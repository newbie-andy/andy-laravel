<?php

namespace App\Models;

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
        'name', 'avatar', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function category() {
        return $this->hasMany('App\Models\ArticleCategory');
    }

    public function article() {
        return $this->hasMany('App\Models\Article');
    }

    //这里我们可以改变根据那个用户的属性条件来获取用户的信息
    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }


}
