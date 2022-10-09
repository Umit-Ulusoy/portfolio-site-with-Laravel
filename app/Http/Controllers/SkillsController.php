<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillsController extends Controller
{
    //
public function indexUsers()
{

    $skills = Skills::all();

    return view('user.skills', ['skills' => $skills]);

}
}
