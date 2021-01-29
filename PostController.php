<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function showAllPosts()
    {
        $postsWithAuthor = Post::with('author')->get();

        // dd($postWithAuthor);
        return response()->json($postsWithAuthor);
    }

    public function showOnePost($id)
    {
        $post = Post::find($id);

        return response()->json($post);
    }

  
}