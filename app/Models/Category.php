<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }


    public function getImageURL(){
        return url('storage/'.$this->image);
    }
    protected function  image() : Attribute{
        return Attribute::make(
            get: fn (string $value) =>  url('storage/'.$value)
        );
    }

}
