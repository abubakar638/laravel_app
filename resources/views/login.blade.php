@extends('layout')

@section('title', 'login')
@section('content')
<div class="container">
	

	<div id="box2">
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
		
		<form method="post" action="{{ route('login.post') }}">
			@csrf
			<div class="container">

<h1>Login</h1>
<hr>

<label for="user_name"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="user_name" id="user_name" required>

<label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>

	<hr>

	<button type="submit" class="registerbtn">Login</button>
  </div>
  <div class="container signin">
    <p>Don't have an account? <a href="/registration">Click to Register</a>.</p>
  </div>
			
		
		</form>
	</div>



</div>
@endsection