<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class AdminCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index()
    {
       $comments = Comment::all();

      return view('admin.comments.home', ['comments' => $comments]);
    }
    
      public function show(Comment $comment){

        return view('admin.comments.show', compact('comment'));
      }
     
    public function delete(Comment $comment)
    {
        return view('admin.comments.delete',['comment' => $comment]);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect(route('admin.comments.index'))->with('status','Comment has been successfuly deleted');
    }

}
