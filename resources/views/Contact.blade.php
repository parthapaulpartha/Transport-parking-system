<html>
<head>
<title>Contact</title>
<style>
*{
padding:0;
margin:0;
}
.main1{
background-color:SlateBlue;
}
.header{
width:100%;
height:30px;
background-color:green;
}
.Email{
width:90%;
padding-top:10px;
color:white;
padding-left:40px;
}
.phone{
float:right;

padding-bottom:3px;
color:white;
}

.start{
width:100%;
height:9%;
background-color:black;
}
#main ul{
list-style:none;
}


}
#main{display:block}
#main ul li{
background-color:black;
width:300px;
border:1px solid black;
height:50px;
line-height:50px;
list-style:center;
text-align:center;
float:left;
padding-left:20px;
}
#main ul li:hover{
background-color:green;
height:55px;
}
#main ul li:hover ul{

display:block;}
#main ul li a{
text-decoration:none;
}
#main ul li h3{
color:white;
}
</style>
</head>
<body>

<!--menu bar-->
	<div class="start">
	<div id="main">
	<ul>

	<li><a href="myhome"><h3>Home</h3></a></li>
	<li><a   href="about"><h3>About</h3></a></li>
	<li><a   href="price"><h3>Price</h3></a></li>
	<li><a   href="contact"><h3>Contact </h3></a></li>
			
	</ul>
	</div>
	</div>
<!--menu bar end-->

<div class="main1" style="height: 400px" >
<center>
<pre>






<h1 style="color:white">Contact With Us<h1>
<h2 style="color:white">If you need any help or additional info about our products and services, just complete
      the form below or request a callback and we will contact you shortly!
	  
   <h2 style="color:black">Email: Transportparking00@gmail.com</h2>
	<h2 style="color:black">Phone: 01*********</h2>
	</h2>
</pre>	  
	  </center>
	   </div><br><br>
<center>	   
<form method="post" action="contactsave">
{{ csrf_field() }}
     First Name:
	<input type="text" name="firstname" placeholder="First name" required/>
	Last Name:
	<input type="text" name="lastname" placeholder="Last Name" required/><br><br>
	Email:<br>
	<input type="text" name="email"placeholder="Email address" required/><br><br>
	Phone Number:<br>
	<input type="text" name="phone"  placeholder="Phone Number" required/><br><br>
	Message<br>
	<textarea name="message" rows="6" Cols="50" placeholder="If any problem you can share" required></textarea><br><br>
	<!--<input type="Submit" name="submit" value="Submit" style=" background-color:SlateBlue;color:white;width:5%;height:5%"><br> -->
	<a target="_blank"  href="#"> <input type="submit" value="ok" style=" background-color:SlateBlue;color:white;width:5%;height:5%"></a>
	<input type="Reset" value="Reset" style=" background-color:SlateBlue;color:white;width:5%;height:5%"><br>
</form>	
</center>
</body>
</html>