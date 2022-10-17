<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    
//Redirecting users to skills page with its data(s)
    public function indexUsers()
    {

        $home = Home::first();

        return view('user.home', ['home' => $home]);
    }

    //Redirecting admins to home page with its data(s)
    public function indexAdmins()
    {

        $home = Home::first();

        return view('admin.pages.managehome', ['home' => $home]);
    }

    public function update(Request $request)
    {

        //Validating the requests
        $this->validate($request, [
            'Headline' => 'required',
            'Subline' => 'required'
        ]);

        $home = Home::find(1);
        $home->Headline = $request->input('Headline');
        $home->Subline = $request->input('Subline');

        //Checking wheter the updating is successful
        if ($home->save())
        {

            return back()->with('success', 'Data has been updated successfully');
        }else{

            return back()->withErrors('failled', 'Data could not be updated!');
        }
        

        
    }

}
