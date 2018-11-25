<?php
	
	require('config/db.php');
	include('header.php');

	session_start();
	$username = $_SESSION['username'];
	$author = $username;

		//Create query
		$query = "SELECT * FROM blogs WHERE author = '$author' ";

		//Get results
		$result = mysqli_query($conn,$query);

		//Fetch data
		$my_blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);
		// var_dump($my_blogs);
			
		//Free result
		mysqli_free_result($result);

		//Close connection
		mysqli_close($conn);
?>

<div class="container">
		<h1>My Blogs</h1>
		<hr />
		<div align="right"><a href="welcome.php">Back</a></div> <br /><br />

		<div>
			<?php foreach ($my_blogs as $blog) :?>

			<div>
				<h5><b>Title : </b></h5> 
						<?php echo $blog['title'] ;?> <br />
			
				<h5><b>Category :</b></h5> 
						<?php echo $blog['category'] ;?> <br />
		
				<h5><b>Body :</b></h5> 
						<?php echo $blog['body'] ;?> 
		
				<h5><b>Created at :</b></h5> 
						<?php echo $blog['created_at'] ;?> <br />
			</div>  <hr />

			<?php endforeach; ?>
		</div>
		
	</div>

<?php include('footer.php'); ?>