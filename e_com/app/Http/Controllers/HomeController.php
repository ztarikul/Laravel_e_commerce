<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Post;
use App\Models\Product;

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
        $posts = Post::orderBy('id', 'desc')->limit('6')->get();
        $products = Product::orderBy('id','desc')->limit('10')->get();
        return view('home',['posts' => $posts , 'products' => $products]);
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
   public function subsubcategory_products($id){
        // dd($id);
        $subsubcategory_products = Product::where('sub_sub_catagory_id', $id)->get();
        return view('product.category',['products' =>$subsubcategory_products ]);


   }
}
