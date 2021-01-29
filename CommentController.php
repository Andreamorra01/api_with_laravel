<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function showAllComments()
    {

    $allComments = Comment::all();
        // dd($allComments);
        
         return response()->json($allComments);
    }

    public function showOneComment($id)
    {
        // dd($id);
        $comment = Comment::find($id);

        // dd($comment);

        //ritorna in formato json
        return response()->json($comment);
    }
}