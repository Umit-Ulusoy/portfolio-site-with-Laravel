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

    public function update()
    {

        $home = Home::first();
        $home->Headline = $request->input('Headline');
        $home->Subline = $request->input('Subline');

        $home->save();
    }

}
