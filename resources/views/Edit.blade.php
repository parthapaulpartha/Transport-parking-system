

<!DOCTYPE html>
<html>
	<head>
		<title>Edit</title>
	</head>
		<body>

			<center></br></br>
			<h2  style="color:blue"> Edit Dates & Times </h2>

				<form method="POST" action="{{route('update')}}">
				{{ csrf_field() }}

					<input type="hidden" name="userid"
							value="{{ ($value) ? $value[0]['id'] : ''}}">
					<table border="1">
						<tr>
							<td>entrydate</td>
							<td><input type="date" name="entrydate"
							value="{{ ($value) ? $value[0]['entrydate'] : ''}}"> </td>
					 	</tr>

					 	<tr>
							<td>entrytime</td>
							<td> <input type="time" name="entrytime"
							 value="{{ ($value) ? $value[0]['entrytime'] : ''}}"> </td>
						</tr>

						<tr>
							<td>exitdate</td>
							<td> <input type="date" name="exitdate" 
							value="{{ ($value) ? $value[0]['exitdate'] : ''}} ">   </td>
					 	</tr>

					 	<tr>
							<td>exittime</td>
							<td><input type="time" name="exittime"
							 value="{{ ($value) ? $value[0]['exittime'] : ''}}" > </td>
					 	</tr>

					 	<tr>
							<td>carnumber</td>
							<td><input type="text" name="carnumber"
							 value="{{ ($value) ? $value[0]['carnumber'] : ''}}" > </td>
					 	</tr>


					 	<tr >
					 		
							<td><center><input type="submit" name="submit" value="Update"></center> </td>
					 		
					 	</tr>
					 	

					 	
					</table>
				</form>
			</center>
		</body>
</html>

