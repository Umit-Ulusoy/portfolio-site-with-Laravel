@extends('layouts.default')
@section('title', 'Contact | My Site')
@section('content')

<h1>Contact With Me</h1>
<pre>
{{ $contact->Content }}
</pre>
Adress: {{ $contact->Adress }} <br />
Phone Number: {{ $contact->PhoneNumber }}

@stop