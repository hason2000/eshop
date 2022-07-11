<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'date_of_birth',
        'role',
        'money_account',
        'avatar',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addresses()
    {
        $this->hasMany(Address::class, 'user_id');
    }

    public function carts()
    {
        $this->hasMany(Cart::class, 'user_id');
    }

    public function wishLists()
    {
        $this->belongsToMany(Product::class, 'wish_lists', 'user_id', 'product_id');
    }

    public function reviews()
    {
        $this->belongsToMany(Product::class, 'reviews', 'user_id', 'product_id')->withPivot('rating', 'content');
    }
}
