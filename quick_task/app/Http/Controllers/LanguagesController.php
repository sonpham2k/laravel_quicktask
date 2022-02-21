<?php

namespace App\Http\Controllers;

class LanguagesController extends Controller 
{
	public function language($locale)
	{
		if (!in_array($locale, config('languages'))) {
        	abort(404);
    	}
    	
    	session()->put('locale', $locale);

    	return redirect()->back();
	}
}
