<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Counselor;
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
        $student = Student::count();
        $counselor = Counselor::count();

        return view('home',compact('student','counselor'));
    }
}
