<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CovidStatistic;


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
        return view('home');
        $covid_stats = CovidStatistic::where(‘foreign_user_id’, auth()->user()->id)->get();
    }
}
