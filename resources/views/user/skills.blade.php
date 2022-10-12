@extends('layouts.default')
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

@stop