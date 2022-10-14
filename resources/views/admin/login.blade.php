@if ($errors->has('email'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif

<h1>Log In</h1>
<p>You can log in by filling the inputs below</p>
<form action="{{ route('login') }}" method="POST" >
    @csrf
    <input type="text" name="email" placeholder="Enter your email" />
    <input type="password" name="password" placeholder="Enter your password" /> <br />
    <button type="submit" >Log In</button>
</form>