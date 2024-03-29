<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='users';
    protected $primarykey ='id';
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'phone',
        'password',
        'isApproved',
        'role',
    ];
    public function Transports()
    {
        return $this->hasMany(Transport::class);
    }
    public function Maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function fullName()
    {
        return $this->firstname.' '.$this->lastname;
    }
}
