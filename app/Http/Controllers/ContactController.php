<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //redirecting to the page for users
    public function indexUsers()
    {

        $contact = Contact::first();

        return view('user.contact', ['contact' => $contact]);
    }

    public function indexAdmins()
    {

        $contact = Contact::first();

        return view('admin.pages.ManageContact', ['contact' => $contact]);
    }

    public function update(Request $request)
    {

        $this->validate($request, [
            'Content' => 'required',
            'Adress' => 'required',
            'PhoneNumber' => 'required'
        ]);

        $contact = Contact::find(1);
        $contact->Content = $request->input('Content');
        $contact->Adress = $request->input('Adress');
        $contact->PhoneNumber = $request->input('PhoneNumber');

        if ($contact->save() > 0)
        {

            return back()->with('success', 'Data(s) has been updated successfully');
        }else{

            return back()->withErrors('failled', 'Data(s) could not be updated!');
        }
    }
}
