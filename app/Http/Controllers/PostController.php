<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('is_published', 1)->first();
        dump($post->title);
        dd('end');
    }

    public function create()
    {
        $arr = [
            [
                'title' => 'title of post',
                'content' => 'some content',
                'image' => 'super image',
                'likes' => 56,
                'is_published' => true,
            ],
            [
                'title' => 'another title of post',
                'content' => 'another some content',
                'image' => 'another super image',
                'likes' => 34,
                'is_published' => true,
            ],
        ];

        foreach ($arr as $item) {
            Post::create($item);
        }

        dd('created');
    }

    public function update()
    {
        Post::find(7)->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 34,
            'is_published' => true,
        ]);
        dd('updated');
    }
}
