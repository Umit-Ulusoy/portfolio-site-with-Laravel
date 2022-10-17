<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    //Redirecting users to contact page with its data(s)
    public function indexUsers()
    {

        $contact = Contact::first();

        return view('user.contact', ['contact' => $contact]);
    }

    //Redirecting admins to contact page with its data(s)
    public function indexAdmins()
    {

        $contact = Contact::first();

        return view('admin.pages.ManageContact', ['contact' => $contact]);
    }

    public function update(Request $request)
    {

        //Validating the requests
        $this->validate($request, [
            'Content' => 'required',
            'Adress' => 'required',
            'PhoneNumber' => 'required'
        ]);

        //Creating a model to update a record on database by its id
        $contact = Contact::find(1);
        $contact->Content = $request->input('Content');
        $contact->Adress = $request->input('Adress');
        $contact->PhoneNumber = $request->input('PhoneNumber');

        //Checking wheter the updating is successful
        if ($contact->save() > 0)
        {

            return back()->with('success', 'Data(s) has been updated successfully');
        }else{

            return back()->withErrors('failled', 'Data(s) could not be updated!');
        }
    }
}
