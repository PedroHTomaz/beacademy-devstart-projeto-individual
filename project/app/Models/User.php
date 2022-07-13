<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'description',
        'email',
        'password',
        'remember_token',
        'tel',
        'birthDate',
        'education',
        'city',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUsers(string $search = null)
    {
        $users = $this->where(function ($query) use ($search) {
            if($search){
                $query->where('name', 'LIKE', "%($search)%");
                $query->orWhere('email', "($search)");
            }
        })
        ->paginate(5);

        return $users;
    }
}
