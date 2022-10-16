@extends('layouts.admin')
@section('title', 'Manage Contact')
@section('content')

@if(Session::has('success'))
<div role="alert">{{ session('success') }}</div>
@endif

@if($errors->all())
@foreach($errors->all() as $error)
<div role="alert">{{ $error }}</div>
@endforeach
@endif

<h1>Manage Contact Page</h1>
You can edit the data of the contact page <br />
<form action="/admin/contact" method="POST">
    @csrf
    @method('put')
    <textarea name="Content">{{ $contact->Content }}</textarea> <br />
    <input type="text" name="Adress" value="{{ $contact->Adress }}" placeholder="Enter a adress" /> <br />
    <input type="text" name="PhoneNumber" value="{{ $contact->PhoneNumber }}" placeholder="Enter a phone number" /> <br />
    <button type="submit" >Save Changes</button>
</form>

@stop