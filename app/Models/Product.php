<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected function  image() : Attribute{
        return Attribute::make(
            get: fn (string $value) =>  url('storage/'.$value)
        );
    }
}
