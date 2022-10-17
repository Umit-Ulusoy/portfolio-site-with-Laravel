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

public function deleteOrUpdate(Request $request)
{

    $this->validate($request, [
        'id' => 'required',
        'skill' => 'required',
        'description' => 'required',
        'action' => 'required'
    ]);

    $skill = Skills::find($request->input('id'));

    switch($request->input('action'))
    {
        case 'update':

            $skill->Skill = $request->input('skill');
            $skill->Description = $request->input('description');
            
            if ($skill->save() > 0)
            {

                return back()->with('success', 'The skill has been updated successfully');
            }else{

                return back()->withErrors('failled', 'The skill could not be updated!');
            }
            break;
            
            case 'delete':

                if ($skill->delete())
                {

                    return back()->with('success', 'The skill is deleted successfully');
                }else{

                    return back()->withErrors('failled', 'The skill could not be deleted!');
                }
                break;
    }
}
}
