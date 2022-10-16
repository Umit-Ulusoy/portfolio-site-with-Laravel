@extends('layouts.admin')
@section('title', 'Manage Home')
@section('content')

<h1>Manage Home Page</h1>
You can edit data of the home page <br />
<form action="/admin/home" method="POST">
    @csrf
    @method('put')
    <input type="text" name="Headline" placeholder="Enter the headline" value="{{ $home->Headline }}" /> <br />
    <textarea name="Subline" >{{ $home->Subline }}</textarea> <br />
    <button type="submit" >Save Changes</button>

    @stop