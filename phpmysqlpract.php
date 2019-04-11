<html>
<head>connection of mysql</head>
<body>

<form action="phpmysqlpract.php" method="post">
Name
<input type="text" name="fname"> <br>
Password
<input type="password" name="pwd"> <br>
<input type="submit" name="submit" value="submit"> <br>
</form>
<?php
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$db = "sample";
		$conn =mysqli_connect($dbhost, $dbuser, $dbpass,$db) ;
		$query= "SELECT * FROM techbee";
		$result=mysqli_query($conn,$query);
														//display name
		while($value=mysqli_fetch_array($result))   //to display all rows n columns
		{
			foreach($rows as $i=>$j)
			{
				echo "$i=>$rows[$i]<br>";
			}
			//echo $value['Name']. "<br>";
			//echo $value['User_ID']. "<br>";
		}
		if(isset($POST['submit']))
		{
			$name=$_POST['fname'];
			$pwd=$_POST['pwd'];
			echo "$name,$pwd";
			$query1= "insert into techbee values('$name','$pwd')";
			$result1=mysqli_query($conn,$query1);
		}	
?>




</body>
</html>