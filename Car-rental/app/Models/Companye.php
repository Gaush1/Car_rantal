<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Companye extends Model implements Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, AuthenticatableTrait;
    protected $fillable = [
        'name',
        'email',
        'username',
        'phone',
        'password',
        'cname',
        'city',
        'status',
        'token'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
