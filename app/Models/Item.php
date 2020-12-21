<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=[
        'name',
        'desc',
        'pic_url',
        'price',
        'color',
        'category_id',
        'brand_id',
        'created_at',
        'updated_at'
    ];

    public function orders(){
        return $this->belongsToMany(Order::class);
    }
    public function baskets(){
        return $this->belongsToMany(Basket::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}

