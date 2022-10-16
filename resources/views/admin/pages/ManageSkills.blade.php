@extends('layouts.default')
@section('title', 'Manage Skills')
@section('content')
<h1>Manage Skills Page</h1>
You can edit the data of the skills page <br />
@foreach($skills as $skill)
<form>
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{ $skill->Id }}" />
    <input type="text" name="Skill" value="{{ $skill->Skill }}" placeholder="Enter the skill" /> <br />
    <textarea name="Description" placeholder="Enter the description of the skill" >{{ $skill->Description }}</textarea> <br />
    <button type="submit" name="action" >Save</button>
    <button type="submit" name="action" >Delete</button>
</form>
@endforeach

@stop