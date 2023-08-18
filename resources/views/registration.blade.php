

@extends('layout')
@section('title', 'registration')
@section('content')

	<div id="box">
	<div>
@if($errors->any())
<div> 
@foreach($errors->all() as $error)
<div>

{{$error}}

</div>
@endforeach
 </div>
@endif

@if(session()->has('error'))
	<div>{{session('error')}}</div>
	@endif

@if(session()->has('success'))
	<div>{{session('success')}}</div>
	@endif
</div>
		
		<form method="post" action="{{ route('register.post') }}">
		@csrf
		<div class="container">

		<h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="user_name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" id="user_name" required>

	<label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

	<hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="/login">Click to Login</a>.</p>
  </div>
			
		</form>
	</div>
</body>

@endsection