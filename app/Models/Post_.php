<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "One Piece",
            "slug" => "one-piece",
            "author" => "Muchamad Taufik Mulyadi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet laudantium provident inventore officia ratione placeat possimus nisi, illo perspiciatis, facilis excepturi unde repudiandae architecto iusto atque maiores a delectus blanditiis perferendis. Totam optio sed laudantium harum. Qui deserunt itaque, officiis, impedit quo magni soluta esse, atque repudiandae aut fugit nemo numquam inventore. Eaque modi incidunt, placeat nisi blanditiis autem ex quae, sit accusamus iste explicabo reprehenderit illum ea, asperiores alias in quasi obcaecati vero quia perspiciatis. Ex, omnis inventore?."
        ],
        [
            "title" => "Naruto Shippuden",
            "slug" => "naruto-shippuden",
            "author" => "Novya Aryanti",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aspernatur repudiandae quidem incidunt possimus? Dolorem magnam reiciendis, aspernatur dolore accusamus excepturi molestias minus recusandae eligendi odio? Cum suscipit distinctio quidem rerum iusto eum, consectetur nobis laboriosam excepturi quae ipsa magnam ipsum eaque quas deleniti? Aspernatur voluptatem error impedit sequi eveniet suscipit reprehenderit nesciunt. Libero laborum blanditiis quia asperiores velit placeat sapiente quod quae optio? Sunt eveniet a modi earum accusantium quos distinctio commodi aliquam ut. Cumque molestias libero tempore neque odit excepturi cupiditate officiis quis itaque, impedit dolorem in? Modi commodi iure provident illum harum, magnam nesciunt neque. Consequuntur, vero!."
        ],
    ];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }
}
