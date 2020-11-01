<?php

namespace App\Http\Controllers;

use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;
use App\Thread;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Like;
use App\Answer;

class ThreadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('threads');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return request::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thread = Thread::find($id);
        $isLiked = 0;
        $count = 0;
        if($thread->likes()->first()) {
            $points = $thread->likes;
            foreach($points as $point) {
                if($point->like == 0) { $count -= 1; } else { $count += 1; }
            }
        }

        if(Auth::check()) {
            $user = Auth::user();
            if($user->likes()->where('thread_id' , $thread->id)->first()){
                $isLiked = $user->likes->where('thread_id' , $thread->id)->first()->like;
            }
            else {
                $isLiked = 2;
            }
        }
        return view('forum.thread' , ['thread' => $thread , 'is_liked1' => $isLiked , 'count' => $count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function home()
    {
        $threads = Thread::all();
        return view('forum.home' , ['threads' => $threads]);
    }

    public function threadLikeThread(Request $request) {
        $thread_id = $request->get('threadId');
        $is_like = $request->get('isLike');
        $update = false;
        $thread = Thread::find($thread_id);
        if(!$thread) {
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('thread_id' , $thread_id)->first();
        if($like) {
            $already_liked = $like->like;
            $update = true;
            if($already_liked == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->thread_id = $thread->id;
        if($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }

    public function update_best_answer(Answer $answer) {
        if($answer->is_best_answer == false) {
            $answer->is_best_answer = true;
        } else {
            $answer->is_best_answer = false;
        }
        $answer->update();
        return redirect('/threads/'. $answer->thread->id);
    }
}
