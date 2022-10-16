<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //

    public function indexUsers()
    {

        $home = Home::first();

        return view('user.home', ['home' => $home]);
    }

    public function indexAdmins()
    {

        $home = Home::first();

        return view('admin.pages.managehome', ['home' => $home]);
    }

    public function update(Request $request)
    {

        $this->validate($request, [
            'Headline' => 'required',
            'Subline' => 'required'
        ]);

        $home = Home::find(1);
        $home->Headline = $request->input('Headline');
        $home->Subline = $request->input('Subline');

        if ($home->save())
        {

            return back()->with('success', 'Data has been updated successfully');
        }else{

            return back()->withErrors('failled', 'Data could not be updated!');
        }
        

        
    }

}
