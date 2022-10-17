@if(Session::has('success'))
<div role="alert">{{ session('success') }}</div>
@elseif($errors->all())
@foreach($errors->all() as $error)
<div role="alert">{{ $error }}</div>
@endforeach
@endif