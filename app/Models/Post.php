<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];//property yang boleh di isi

    protected $guarded = ['id']; //yang tidak boleh di isi

    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        }); //versi pakai issets

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        }); //versi callback

        $query->when($filters['author'] ?? false, fn($query, $author) => 
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
                )
        );  //versi arrow function
    }
    

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return "slug";
    }
}




