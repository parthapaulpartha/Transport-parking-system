
<html>

<head><title>Home</title>
<style>
*{
margin:0;
padding:0;
}
.start{
width:100%;
height:9%;
background-color:black;
}
.logo{
height:105px;
}
#main ul{
list-style:none;
background-color:;
text-align:right; 

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
padding-left:;
}
#main ul li:hover{
background-color:green;
height:56px;

}
#main ul li:hover ul{

display:block;}
#main ul li a{
text-decoration:none;
}
#main ul li h3{
color:white;
}
#content h1{
background-color:white;
}
<!-- use header -->
.header{
width:100%;
height:%;
}
.header_block{
padding-top:6px;
color:white;
padding-bottom:20px;
}

.parking{
width:100%;
height:100%;
background-image:url("parking2.png");
background-repeat:;
background-size:cover;
}
.padding pre level{
font-size:40;
}
.pic ul {
text-align:right;
}
.pic img{
height:50%; 
}

.pic  ul li a{
text-decoration:none;
float: left;
}
.pic ul{
list-style:none;
background-color:;
text-align:;

}
.pic{display:block}
.pic ul li{
background-color:white;
width:150px;
border:1px solid white;
height:42px;
line-height:50px;
list-style:center;
text-align:center;
float:right;
padding-left:10px;
padding-right:0px;
}
.pic ul li:hover{
background-color:white;
height:38px;
}
#main ul li:hover ul{

display:block;}
.pic ul li a{
text-decoration:none;
padding-right:px;
}
.pic ul li h3{
color:;
}

.pic form{
width:50px;
height:42px;
line-height:50px;
list-style:center;
text-align:center;
float:left;
padding-top:10px;
padding-left:6%;   

}
.pic form input{
	width:100px;
	height:70%;
	font-size:15px;
	padding-left:0%; 
}

</style>
</head>

<body>

<!-- Header for welcome-->
    <header style="background-color:green; width:100%;height:6% ">
			<div class="header_block" >
			 <marquee behavior="alternate"><h1>Welcome</h1></marquee>
			</div>
	</header>
<!-- Header close-->
	
	<!-- Header for search & login-->
	<header style="background-color:white; width:100%;height:8% ">
	<div class = "pic">
		
    	<form>
		<a href="searchs"><input type="button" value="Search" style="color:blue;"></a>
		</form>
		
			<ul>
		
				<li>
				<?php if(isset($_SESSION['isLoggedIn'])) { ?>
                <a href="logout.php">(<?php echo $_SESSION['Firstname']; ?>)Logout</a>
            <?php }else {?>
                <a href="Registration"><h2>Login</h2></a>
            <?php } ?>
				</li>
			</ul>
		</div>
	</header>
	<!-- Header close-->

<!-- menu -->
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

<center><div class="parking">
<pre>




<h1  style="color:blue"> Select Your Dates & Times </h1>
<form method="POST" action="homesave">
{{ csrf_field() }}

<level><h2  style="">Entry Date & Time</h2><level>
<input type="date" name="entrydate" style="width:10%;height:5%" required>  <input type="time" name="entrytime" style="width:8%;height:5%" required><br>
<level><h2  style="">Exit Date & Time</h2><level>
<input type="date" name="exitdate"  style="width:10%;height:5%" required>  <input type="time" name="exittime" style="width:8%;height:5%" required><br>
<input type="text" name="number" placeholder="Car Number" style="width:15%;height:5%;font-size:15px">
<!-- Show message-->
	<script>
		  function clickAlert() {
			alert("Data has been inserted");
		   }
	</script>
<input type="submit" value="Submit" onclick="clickAlert()" style=" background-color :blue; color:white; width:10%;height:5%">
<!-- end message-->
</form>
<a href="space"><input type="button" value="Choose Your Space" style=" background-color :green; color:white; width:15%;height:7%;font-size:20px"></a>
<a href="front"><input type="button" value="Location" style=" background-color :green; color:white; width:15%;height:7%;font-size:20px" ></a>


</body>

<footer >Made by Paul & Shaha</footer>
</html>