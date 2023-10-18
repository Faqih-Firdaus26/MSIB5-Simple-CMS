<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Faqih Firdaus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel dignissimos voluptas, voluptate voluptates excepturi nulla omnis nisi eos iure, provident consequuntur? Provident temporibus accusamus veniam cum ipsum fuga quidem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jafar Setiawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In vel odio similique. Totam aspernatur, esse qui hic suscipit quidem repellat in ipsum nostrum alias nesciunt magnam fuga doloribus repellendus? Recusandae."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {

        $posts = static::all();
        //         $post = [];
        //         foreach($posts as $p){
        //         if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
