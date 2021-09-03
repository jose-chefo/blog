<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion uno a muchos inversa post par users
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relacion uno a muchos inversa de post para categories
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos entre post y tags
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
