<?php

namespace App\Http\Controllers;

use App\Form;
use App\User;
use Illuminate\Http\Request;

class FormsController extends Controller
{
	/**
	*Controller for index of /form
	*If user has admin rights returns all forms, else just the one that belongs to that user
	*/
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
	//view specific form
	public function show(Form $form)
	{
		$this->authorize('view', $form);

		return view('forms.show', compact('form'));
	}
	//create form TODO: each user can only create 1 form
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
	// We don't need an edit option at this point
    public function update(){

    	return abort(404);
    }

   	public function store()
    {
    	//validation of user input
        request()->validate([

           'title' => ['required', 'min:3', 'max:50'],
           'description' => ['required', 'min:5', 'max:255']

           ]);
        //store input
    	\App\Form::create([
      		'title' => request('title'),
      		'description' => request('description'),
      		'owner_id' => auth()->id()
    		]);

    	return redirect('/forms');
    }


}
