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
}
