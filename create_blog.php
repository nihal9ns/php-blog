<?php

	require('config/db.php');
	include('header.php');

	session_start();
	$username = $_SESSION['username'];

	if(isset($_POST['create_blog'])){
		$title = htmlentities($_POST['title']);
		$author = $username;
		$category = htmlentities($_POST['category']);
		$body = htmlentities($_POST['body']);

		//Create query
		$query = "INSERT INTO blogs(title,author,category,body) values('$title','$author','$category','$body')";

		if(mysqli_query($conn,$query)){
			header('Location:my_blogs.php');
		}else{
			echo "ERROR :" .mysqli_error($conn);
		}

		//Close connection
		mysqli_close($conn);
	}

?>

	<div class="container">
		<h1>Create Blog</h1>
		<hr />
		<div align="right"><a href="welcome.php">Back</a></div> <br /><br />

		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<textarea name="title" placeholder="title"></textarea> <br /><br />
			<textarea name="category" placeholder="category"></textarea> <br /><br />
			
			<textarea name="body" placeholder="body"></textarea> <br /><br />
			<input type="submit" value="Create Blog" name="create_blog" id="create_btn"> <br /><br />
		</form>
		
	</div>

<?php include('footer.php'); ?>