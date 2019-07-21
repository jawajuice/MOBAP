<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
        public function name()
    {
            

        return view('visitors/name');
    }
        public function age(Request $request) {
            $name = $request->input('name');
            $request->session()->put('user',$request->input('name'));
/*            $visitor = new \App\Visitor;
            $visitor->name = $name;
            $visitor->save();*/
/*            request()->validate([

            'name' => ['required', 'min:3', 'max:10']

            ]);
            \App\Visitor::create(request(['name', '']));*/

             
            return view('visitors/age');

    }

    public function gender(Request $request) {

        $age = $request->input('age');
        //$request->session()->put('user',$request->input('name'));

        $request->session()->put('age',$request->input('age'));



        return view('visitors/gender');
    }

    public function mood(Request $request) {

        $request->session()->put('gender',$request->input('gender'));

        return view('visitors/mood'); 
    }
    public function vars(Request $request) {
        $age = $request->input('age');

    }


}