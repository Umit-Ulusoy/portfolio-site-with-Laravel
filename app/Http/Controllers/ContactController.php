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
}
