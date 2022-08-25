<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['name','title', 'category_id' ,'image' ,'description','img'];

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id' );
    }
}
