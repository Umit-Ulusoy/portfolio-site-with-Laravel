@extends('layouts.admin')
@section('title', 'Manage Skills')
@section('content')

    
<h1>Manage Skills Page</h1>
<h1>Add A New Skill</h1>
You can add a new skill here <br />
<form action="/admin/skills" method="POST">
    @csrf
    <input type="text" name="skill" placeholder="Enter a new skill" /> <br />
    <textarea name="description" placeholder="Enter a description for the skill" ></textarea> <br />
    <button type="submit" >Add The Skill</button>
</form>
<hr>

<h1>Edit Your Skills</h1>
You can edit the data of the skills page <br />
@foreach($skills as $skill)
<div id="skill-{{ $skill->Id }}">
<form action="/admin/skills" method="POST">
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{ $skill->Id }}" />
    <input type="text" name="skill" value="{{ $skill->Skill }}" placeholder="Enter the skill" /> <br />
    <textarea name="description" placeholder="Enter the description of the skill" >{{ $skill->Description }}</textarea>
    <button type="submit" name="action" value="update" >Update</button>
    <button type="submit" name="action" value="delete" >Delete</button>
</form>
</div>
@endforeach
{{ $skills->links() }}

@stop