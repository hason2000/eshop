<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'address_id',
        'name',
        'detail',
        'img_shop',
        'web_site'
    ];

    public function products()
    {
        $this->hasMany(Product::class, 'product_id');
    }
}
