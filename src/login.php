<?php
ob_start();
session_start();
// include("db_config.php");
ini_set('display_errors', 1);
?>

<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Csoctrain Login Page</title>

	<link href="css/htmlstyles.css" rel="stylesheet">
</head>

<body>
	<div class="container-narrow">

		<div class="jumbotron">
			<p class="lead" style="color:white">
				Csoc Train Login Page!
			</p>
		</div>

		<div class="response">
			<form method="POST" autocomplete="off">
				<p style="color:white">
					Username: <input type="text" id="uid" name="uid"><br /></br />
					Password: <input type="password" id="password" name="password">
				</p>
				<br />
				<p>
					<input type="submit" value="Submit" />
					<input type="reset" value="Reset" />
				</p>
			</form>
		</div>


		<br />

		<div class="row marketing">
			<div class="col-lg-6">
				<?php
				$con = mysqli_connect("mysql1", "root", "I@mgr00t", "csoctrain");

				if (mysqli_connect_errno()) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					exit();
				}

				// Escape special characters, if any
				$username = mysqli_real_escape_string($con, $_POST['uid']);
				$pass = mysqli_real_escape_string($con, $_POST['password']);

				// $sql = "INSERT INTO Persons (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')";
				$sql = "SELECT * FROM users where username='" . $username . "' AND password = '" . md5($pass) . "'";

				if (!mysqli_query($con, $sql)) {
					die('Error: ' . mysqli_error($con));
				}

				$result = mysqli_query($con, $sql);
				$row_cnt = mysqli_num_rows($result);

				if ($row_cnt > 0) {

					$row = mysqli_fetch_array($result);

					if ($row) {
						//$_SESSION["id"] = $row[0];
						$_SESSION["username"] = $row[1];
						$_SESSION["name"] = $row[3];
						//ob_clean();

						header('Location:home.php');
					}
				} else {
					echo "<font style=\"color:#FF0000\"><br \>Invalid password!</font\>";
				}


				mysqli_close($con);

				?>

			</div>
		</div>


		<div class="footer">
			<p>Csoc Train Lab| csoctrainlab</p>
		</div>
	</div> <!-- /container -->

</body>

</html>