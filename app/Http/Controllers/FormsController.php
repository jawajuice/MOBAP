<?php

namespace App\Http\Controllers;

use App\Form;
use App\User;
use Illuminate\Http\Request;

class FormsController extends Controller
{

	public function index(User $user)
	{
		if (auth()->user()->admin == 1) {
			$forms = Form::All();
		}
		else
		{
			$forms = Form::where('owner_id', auth()->id())->get();
		}
		return view('forms.index', compact('forms'));
	}
	public function show(Form $form)
	{
		$this->authorize('view', $form);

		return view('forms.show', compact('form'));
	}

	public function create()
	{
		$forms = Form::where('owner_id', auth()->id())->get();
		if (!isset($forms)){
		return view('forms.create');
		}
		else {
		return view('forms.show');
		}

	}
    public function update(){

    	return abort(404);
    }
   	public function store()
    {

        request()->validate([

           'title' => ['required', 'min:3', 'max:50'],
           'description' => ['required', 'min:5', 'max:255']


           ]);

    	\App\Form::create([
      		'title' => request('title'),
      		'description' => request('description'),
      		'owner_id' => auth()->id()
    		]);

    	return redirect('/forms');
    }


}
