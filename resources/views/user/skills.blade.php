@extends('layouts.default')
@section('title', 'Skills | My Site')
@section('content')

<h1>My Skils</h1>
@foreach ($skills as $skill)
<div id='skill-{{ $skill->Id }}'>
    <h2>{{ $skill->Skill }}</h2>
    <pre>
        {{ $skill->Description }}
</pre>
</div>
@endforeach
{{ $skills->links() }}

@stop