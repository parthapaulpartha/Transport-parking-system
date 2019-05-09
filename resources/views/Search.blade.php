
<html>

<head><title>Home</title>
<style>
*{
margin:5px;
padding:5px;
}

.pic{
	width:900px;
   height:100px;
	display:block

}


.pic form input{
width:40%;
height:35%;
line-height:50px;
list-style:center;
text-align:center;

}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
</head>

<center><body>
	<?php $datas = DB::table('home')->get(); ?>

	<div class = "pic">
		
		<center>

			<h2 style="color:blue">Search Here</h2>
			<form action="/search" method="get" role="search">
				<input type="search" id="search" name="search" placeholder="Type your car number" style="width:%;height:;font-size:15px">
				<input type="submit" value="Search" style="width:8%;height:32%;font-size:15px ;color:blue;" >
				</span>
	        </form>
		
			<table class ="table maindata" border="1">
			    <tr>
					<th > Entry-date </th>
					<th> Entry-time </th>
					<th> Exit-date </th>
					<th> Exit-time </th>
					<th> Car-Number </th>
					<th colspan="2"> Action </th>
					
				</tr>
				<tbody id="data">
		     @foreach($datas as $value) 
				<tr>
					<td>{{$value->Entrydate}}</td>
					<td>{{$value->Entrytime}}</td>
					<td>{{$value->Exitdate}}</td>
					<td>{{$value->Exittime}}</td>
					<td>{{$value->CarNumber}}</td>
					<td><a href="{{route('edit',$value->CarNumber)}}"> Edit </a></td>
					<td><a href="/delete/{{ $value->CarNumber }}"> Delete </a></td>
					
				</tr>
			 @endforeach 
			 </tbody>
            </table>
           

          <!--  <table class ="table searchdata" border="1" style="display:none">
			    <tr>
					<th > Entry-date </th>
					<th> Entry-time </th>
					<th> Exit-date </th>
					<th> Exit-time </th>
					<th> Car-Number </th>

				</tr>
				<tbody id="success">

				</tbody>
		    
	    	</table>

	    </center>

	</div>  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

		<script type="text/javascript">

			function search(){
			var search =$('#search').val();
				
				if (search){
					$(".maindata").hide();
					$(".searchdata").show();
				}
				else{
					$(".maindata").show();
					$(".searchdata").hide();
				}
					s.ajax({
						type:GET,
						url:'{{URL::to("/searchs")}}',
						data: {
							search: search,
							_token: $('#signup-token').val()
						}
						datatype: 'html',

						success: function (response) {
							console.log(response);
							$("#success").html(response);
						}
					})
			}
		
 
  </script>-->
  

</body></center>

</html>
