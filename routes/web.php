<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/blog', function () {
    $blog_posts=[
        [
            "title" => "Judul Post Pertama",
            "author" => "bruno mars",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum reiciendis officia labore accusantium officiis obcaecati consequatur quidem. Perferendis nobis soluta quam fugiat expedita ad ea nihil laudantium, magni suscipit cumque ipsum reprehenderit illum odio dolore dicta voluptatum minima labore necessitatibus! Odio, optio possimus mollitia, reiciendis minus perspiciatis officiis magni dolorem explicabo molestias maxime? Laboriosam totam sequi modi illo sint, voluptatem cupiditate ducimus minima accusantium, maiores quod assumenda eius architecto eos nostrum labore nam, perferendis dolores! Atque recusandae tenetur delectus maxime facilis, nemo distinctio, consequatur voluptates sed illum unde aspernatur numquam?"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "taylor swift",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quia accusamus voluptatum voluptates? Blanditiis magnam omnis nobis quae tempora, facere beatae corrupti odio sed cum alias repellendus est, quos sint vero nisi harum tenetur hic voluptas! Modi tenetur cupiditate nam, fugit, placeat a obcaecati laboriosam ratione iste iure veniam velit quos assumenda ab commodi rerum? Illo inventore repellat at eligendi quo recusandae optio enim reprehenderit explicabo maiores? Eum possimus architecto ut et quos, non delectus quidem nostrum tempore iste veniam aliquam. Voluptate ex distinctio ipsa obcaecati amet ad vero numquam impedit laboriosam, dicta vel magni dolorum reiciendis ab nobis necessitatibus, cum sint praesentium facilis quae architecto repellendus! Recusandae accusamus est consectetur laborum autem ipsam optio, voluptatum labore, incidunt porro delectus ratione quaerat officiis explicabo, possimus exercitationem! Quidem consequatur qui quaerat eligendi! Quas, temporibus quae est doloremque ut autem quia, facere amet corrupti fugiat quibusdam. Tempora minima corrupti nisi asperiores unde."
        ]
    ];
    return view('blog', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Izsa Zafira",
        "email" => "izsazfr@gmail.com",
        "umur" => "23"
    ]
);
});

