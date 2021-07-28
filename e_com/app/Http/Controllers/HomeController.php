<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $posts = Post::orderBy('created_at', 'desc')->limit('6')->get();
        return view('home',['posts' => $posts]);
    }

    public function covid_form(){
        $data = null;
        return view('covid_tracker', ['data'=>$data]);
    }

    public function covid_tracker(Request $request){

        $country = $request['country_name'];
        $data = Http::get('https://coronavirus-19-api.herokuapp.com/countries/'.$country)->json();
        return view('covid_tracker', ['data' => $data]);
        // dd($data);
    }
}
