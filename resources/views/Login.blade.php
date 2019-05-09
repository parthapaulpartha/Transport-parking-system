
<html>

<head><title>Log In</title></head>

<body style="background-image:url('login.jpg'); background-repeat: no-repeat; background-position:left; background-size:;">
<pre>







<center>

	@if (count ($errors) > 0)
		@foreach($errors->all() as $error)
			<p class="alert alert-danger" style="color:red">{{$error}}</p>
		@endforeach
	@endif
<form method="POST" action="/Loginsave">
{{ csrf_field() }}
<input type="text" name="email" placeholder=" Email Address" value="{{old('email')}}" style="height:5%;width:20%;" required ><br>

<input type="password" name="password" placeholder="Password" style="height:5%;width:20%;" required><br>

<!-- <script>
  function clickAlert() {
    alert("Log in Successfully");
}
</script> -->
<input type="submit" name="submit" onclick="clickAlert()" value="Log In" style="height:5%;width:10%; background-color:green;color:white;"><br>
</form>
<h2>Do You Want To Create A New Account?<a href="Registration">Registration Here</a></h2>

</center></pre>
</body>
</html>