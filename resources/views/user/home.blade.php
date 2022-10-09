@include('includes.header')
@include('includes.nav')
<h1>{{ $home->Headline }}</h1>
<pre>
    {{ $home->Subline }}
</pre>
@include('includes.footer')