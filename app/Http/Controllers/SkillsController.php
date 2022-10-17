<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillsController extends Controller
{
    
public function indexUsers()
{

    $skills = Skills::paginate(4);

    return view('user.skills', ['skills' => $skills]);

}

public function indexAdmins()
{

    $skills = Skills::paginate(4);

    return view('admin.pages.ManageSkills', ['skills' => $skills]);
}
}
