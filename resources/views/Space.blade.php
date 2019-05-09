<html>
<head>
<title>Parking Space</title>
	<style>
	*{
	padding:0;
	margin:0;
	}
		</style>

		<script type="select">
		function disable(){
			documentgetElementById("frontspace").disable = true;
		}

		function enable(){
			documentgetElementById("frontspace").enable = false;
		}


		</script>
</head>

<center><body style="background-color:gray";>
<?php $datas = DB::table('space')->get(); ?>
<pre>

<center><h1 style="color:white; background-color:green " >Please Select One</12></center>
<center><form method="POST" action="spacesave">
{{ csrf_field() }}
 <h2 style="color:white">Front side</h2>
 <select name="front"  style="width:7%;height:5%">
 <option>Space No</option>
    <option>--</option>  
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
	<option>9</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	<option>13</option>
	<option>14</option>
	<option>15</option>
 </select>
 <h2 style="color:white">Middle side</h2>
 <select name="middle" style="width:7%;height:5%" >
 <option>Space No</option>  
    <option>--</option>
	<option>16</option>
	<option>17</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>21</option>
	<option>23</option>
	<option>24</option>
	<option>25</option>
	<option>26</option>
	<option>27</option>
	<option>28</option>
	<option>29</option>
	<option>30</option>
 </select>
 <h2 style="color:white">Back side</h2>
 <select name="back" style="width:7%;height:5%" >
 <option>Space No</option> 
    <option>--</option>
	<option>31</option>
	<option>32</option>
	<option>33</option>
	<option>34</option>
	<option>35</option>
	<option>36</option>
	<option>37</option>
	<option>38</option>
	<option>39</option>
	<option>40</option>
	<option>41</option>
	<option>42</option>
	<option>43</option>
	<option>44</option>
	<option>45</option>
 </select>

<a href="MYHome.php"><input type="submit" value="Submit" onclick="clickAlert()"
 style=" background-color :green; color:white; width:10%;height:7%;font-size:20px"></a>
	</form></center></pre>
<pre>

	<center><h1 style="color:white; background-color:green " >Booked Place</h1></center>
	<center><table class ="" border="1" cellpadding="10" cellspacing="10" style="background-color:white;font-size:18px">
			    <tr>
					<th style="color:green" > Front-side </th>
					<th style="color:green">Middle-side </th>
					<th style="color:green"> Back-side </th>
					
					
					
				</tr>
				<tbody id="data">
		     @foreach($datas as $value) 
				<tr>
					<td style="color:red">{{$value->Front_side}}</td>
					<td style="color:red">{{$value->Middle_side}}</td>
					<td style="color:red">{{$value->Back_side}}</td>
					
				</tr>
			 @endforeach 
			 </tbody>
            </table></center></pre>
</body>
</html>