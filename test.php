<?php

	include('config/db.php');

		$email = 

		//Create query
		$query = "SELECT * FROM user WHERE email = '$email' and password = '$password' ";

		//Get results
		$result = mysqli_query($conn,$query);

		//Fetch data
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
		var_dump($users);

		
		//Free result
		mysqli_free_result($result);

		//Close connection
		mysqli_close($conn);
	}

?>