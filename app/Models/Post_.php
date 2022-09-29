<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Blog extends Model
// {
//     use HasFactory;
// }

class Blog 
{
    private static $blogs = [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-blog-pertama",
            "author" => "Naufal Akbar Kardieno Yasamita",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, magnam. Illo blanditiis aliquid, iusto tenetur laborum laboriosam neque pariatur tempore quae maiores sunt eum, ut laudantium sed velit error dolores placeat dolorem voluptatibus? Nam necessitatibus, nobis nostrum quaerat, expedita provident natus suscipit reiciendis perferendis, incidunt laboriosam voluptate eos libero a? Maiores, a. In totam aut eius minima porro quod ducimus dolorum, ab quisquam adipisci laboriosam sed. Id rem architecto repudiandae at, laboriosam reiciendis molestiae eaque, temporibus possimus, et sit suscipit!"
        ],
        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-blog-kedua",
            "author" => "Dicky Kurnia Ramadhan",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, magnam. Illo blanditiis aliquid, iusto tenetur laborum laboriosam neque pariatur tempore quae maiores sunt eum, ut laudantium sed velit error dolores placeat dolorem voluptatibus? Nam necessitatibus, nobis nostrum quaerat, expedita provident natus suscipit reiciendis perferendis, incidunt laboriosam voluptate eos libero a? Maiores, a. In totam aut eius minima porro quod ducimus dolorum, ab quisquam adipisci laboriosam sed. Id rem architecto repudiandae at, laboriosam reiciendis molestiae eaque, temporibus possimus, et sit suscipit!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blogs);
    }

    public static function find($slug)
    {
        $blogs = static::all();

        // return $blogs->firstWhere('slug', $slug);
        return $blogs->first();
    }
}