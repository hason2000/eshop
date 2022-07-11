<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'shop_id',
        'category_id',
        'brand_id',
        'name',
        'price',
        'condition',
        'detail',
        'img_link',

    ];

    public function imgs()
    {
        $this->hasMany(Img::class, 'product_id');
    }

    public function shop()
    {
        $this->belongsTo(Shop::class, 'shop_id');
    }

    public function tags()
    {
        $this->belongsToMany(Tag::class, 'product_id', 'tag_id');
    }

    public function category()
    {
        $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        $this->belongsTo(Brand::class, 'brand_id');
    }
}
