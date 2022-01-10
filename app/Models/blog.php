<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class blog
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "bruno mars",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum reiciendis officia labore accusantium officiis obcaecati consequatur quidem. Perferendis nobis soluta quam fugiat expedita ad ea nihil laudantium, magni suscipit cumque ipsum reprehenderit illum odio dolore dicta voluptatum minima labore necessitatibus! Odio, optio possimus mollitia, reiciendis minus perspiciatis officiis magni dolorem explicabo molestias maxime? Laboriosam totam sequi modi illo sint, voluptatem cupiditate ducimus minima accusantium, maiores quod assumenda eius architecto eos nostrum labore nam, perferendis dolores! Atque recusandae tenetur delectus maxime facilis, nemo distinctio, consequatur voluptates sed illum unde aspernatur numquam?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "taylor swift",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quia accusamus voluptatum voluptates? Blanditiis magnam omnis nobis quae tempora, facere beatae corrupti odio sed cum alias repellendus est, quos sint vero nisi harum tenetur hic voluptas! Modi tenetur cupiditate nam, fugit, placeat a obcaecati laboriosam ratione iste iure veniam velit quos assumenda ab commodi rerum? Illo inventore repellat at eligendi quo recusandae optio enim reprehenderit explicabo maiores? Eum possimus architecto ut et quos, non delectus quidem nostrum tempore iste veniam aliquam. Voluptate ex distinctio ipsa obcaecati amet ad vero numquam impedit laboriosam, dicta vel magni dolorum reiciendis ab nobis necessitatibus, cum sint praesentium facilis quae architecto repellendus! Recusandae accusamus est consectetur laborum autem ipsam optio, voluptatum labore, incidunt porro delectus ratione quaerat officiis explicabo, possimus exercitationem! Quidem consequatur qui quaerat eligendi! Quas, temporibus quae est doloremque ut autem quia, facere amet corrupti fugiat quibusdam. Tempora minima corrupti nisi asperiores unde."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
