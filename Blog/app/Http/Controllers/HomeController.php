<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**public function __construct()
    {
        $this->middleware('auth');
    }
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Categories = Category::all();
        $posts = Post::where('category_id', request('category_id'))
        ->latest()
        ->get();

        //$posts = Post::orderBy('id', 'desc');

        return view('index', [
            'categories' => $Categories,
            'posts' => $posts
        ]);
        /*
        easier to use: return view('index',
            compact('categories','posts'));
        */
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
