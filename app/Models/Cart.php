<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'total_price'
    ];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }

    public function products()
    {
        $this->belongsToMany(Product::class, 'cart_id', 'product_id')->withPivot('amount');
    }
}
