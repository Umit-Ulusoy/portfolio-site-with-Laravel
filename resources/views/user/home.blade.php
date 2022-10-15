@extends('layouts.default')
@section('title', 'Home | My Site')
@section('content')

<h1>{{ $home->Headline }}</h1>
<pre>
    {{ $home->Subline }}
</pre>

@stop