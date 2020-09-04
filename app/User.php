<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
         'name','password','image','fathername','mothername','presentaddress','permanentaddress','mobile','parentmobileno','presentschoolname','classname','roll','examlanguage','session'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function boot()
    
	{
        parent::boot();
		static::creating(function ($model) {
                // Remember that $model here is an instance of Article
                
                $model->user_id = date('Y').$model::max('id')+1;
                //dd($model->user_id );
        });
	}
}
