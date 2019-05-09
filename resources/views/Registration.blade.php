




<html>
<head>
<title> Registration</title>
<style>

.registration form{
padding-top:5%;
color: ;
font-size:18;
}
body{

}

</style>
</head>
<center><body style="background-image:url('regis.jpg'); background-repeat: no-repeat; background-position: center; background-size:cover ;">
<div >
<h1 style="color:"><center></center></h1>
</div>

<pre>


</pre>

	@if (count ($errors) > 0)
		@foreach($errors->all() as $error)
			<p class="alert alert-danger" style="color:red">{{$error}}</p>
		@endforeach
	@endif

<form method="post" action="/Registrationsave">
{{ csrf_field() }}
			First Name :    
				<input type="text" name="fname" placeholder="First Name" value="{{old('fname')}}" value="{{old('fname')}}" required>
			Last Name:
				<input type="text" name="lname" placeholder="Last Name" value="{{old('lname')}}" required><br><br>
			Email Address:
				<input type="text" name="email" placeholder=" Email Address" value="{{old('email')}}" required><br><br>
			Password:
			  <input type="password" name="password" placeholder="New password"  required><br><br>
			Confirm-password:
				<input type="password" name="password_confirmation" placeholder="Confirm-password" required><br><br>
			Phone Number:
				<input type="text" name="phn" placeholder="Phone Number" value="{{old('phn')}}" required><br><br>
			Birthday:
				<input type="date" name="birthday" style="width:10%;height:5%" value="{{old('birthday')}}" required><br><br> 

			<div style="color:">
				<input type="radio" name="gender" value="Female"> Female
				<input type="radio" name="gender" value="Male" >Male<br><br>
		</div>
		Address:<br>
		<textarea rows="4" cols="40" name="address" value="" required></textarea><br><br>
			

			<input type="submit" value="Submit" onclick="clickAlert()" style="background-color:green; width:10%;height:5% " >
			


</form>
<h3>Already A Member? <a href="Login">Login</a></h3>

</body>
</html>

