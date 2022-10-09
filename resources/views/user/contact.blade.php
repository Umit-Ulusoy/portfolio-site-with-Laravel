@include('includes.header')
@include('includes.nav')
<h1>About Me</h1>
<pre>
{{ $contact->Content }}
</pre>
Adress: {{ $contact->Adress }} <br />
Phone Number: {{ $contact->PhoneNumber }}
@include('includes.footer')