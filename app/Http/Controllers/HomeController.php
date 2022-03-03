<?php

namespace App\Http\Controllers;
use Cache;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CustomRecipe;
use App\Models\UserDetails;
use App\Models\Anthropometric;
use App\Models\Agenda;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if( Auth::user()->role == "admin" ) {
            return view('home'); 

        }else{
            setlocale(LC_ALL, 'es_ES');
            
            $id = Auth::user()->id;
            $user = UserDetails::where('user_id', $id)->first();

            $plan = CustomRecipe::with('recipe')
                                ->where('user_id', $user->user_id)
                                ->where('status', 1)
                                ->inRandomOrder()
                                ->first();

            $product = Product::inRandomOrder()->first();
        
            $data = Anthropometric::where('user_id', $id)->latest()->first();
            $agenda = Agenda::where('user_id', $id)->latest()->first();

            return view('home', compact('user', 'plan', 'product', 'data', 'agenda'));  
        }
    }
}
