<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id',
        'address',
        'status',
        'created_at',
        'updated_at'
    ];

    public function items(){
        return $this->belongsToMany(Item::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
