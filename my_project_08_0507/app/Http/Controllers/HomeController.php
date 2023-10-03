<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ptAll = Post::select()->where('user_id', auth()->id())->count(); //All user's posts 
        $pt = Post::select()
                        ->where('user_id', auth()->id())
                        ->orderBy('updated_at', 'DESC')
                        ->get();

        return view('home')->with(['beitraege'=> $pt, 'alle' => $ptAll]);
    }
}
