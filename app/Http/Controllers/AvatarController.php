<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function avatar(Request $request)
    {
        //
        $request->session()->put('mood',$request->input('credit-card'));

            $age = session('age');
            $gender = session('gender');

            if ($gender == 'female') {

            return view('avatars/female/index');

            }
            else {

            return view('avatars/male/index');

            }
 
        
    }
    public function male_name() 
    {
        return view('avatars/male/male_name');
    }

    public function male_bd() 
    {
        return view('avatars/male/male_bd');
    }
    public function male_hobi(Request $request) 
    {
        $request->session()->put('bday',$request->input('date-change'));

            $age = session('age');
            $gender = session('gender');
            if ($age == 'lower') {

            return view('avatars/male/lower/hobi');

            }
            else {

            return view('avatars/male/higher/hobi');

            }
    }

    public function male_instrument(Request $request) {
        $request->session()->put('trening',$request->input('trening'));

        return view('avatars/male/lower/instrument');
    }
    public function male_risanke(Request $request) {
        $request->session()->put('instrument',$request->input('instrument'));

        return view('avatars/male/lower/risanke');
    }
    public function male_prijatelji(Request $request) {
        $request->session()->put('risanke',$request->input('risanke'));

        return view('avatars/male/lower/prijatelji');
    }
    public function male_barva(Request $request) {
        $request->session()->put('prijatelji',$request->input('prijatelji'));
        return view('avatars/male/lower/barva');
    }
    public function male_zival(Request $request) {
        $request->session()->put('barva',$request->input('barva'));

        return view('avatars/male/lower/zival');
    }
    public function male_letnicas(Request $request) {
        $request->session()->put('zival',$request->input('zival'));

        return view('avatars/male/lower/letnicas');
    }

    public function male_spoznanje(Request $request) {
        $request->session()->put('letnicas',$request->input('letnicas'));

        return view('avatars/male/spoznanje');
    }
    public function male_pomoc() {

        return view('avatars/male/pomoc1');
    }
    public function male_pomoc2() {

        return view('avatars/male/pomoc2');
    }
    public function female_hobi(Request $request) 
    {
        $request->session()->put('bday',$request->input('date-submit'));

            $age = session('age');
            $gender = session('gender');

            if ($age == 'lower') {

            return view('avatars/female/lower/hobi');

            }
            else {

            return view('avatars/female/higher/hobi');

            }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
