@extends('layouts.admin')
@section('title', 'Manage Skills')
@section('content')

@if(Session::has('success'))
<div role="alert">{{ session('success') }}</div>
@elseif($errors->all())
@foreach($errors->all() as $error)
<div role="alert">{{ $error }}</div>
@endforeach
@endif

<h1>Manage Skills Page</h1>
You can edit the data of the skills page <br />
@foreach($skills as $skill)
<div id="skill-{{ $skill->Id }}">
<form action="/admin/skills" method="POST">
    @csrf
    @method('post')
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