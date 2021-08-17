<?php
ob_start();
session_start();
include("db_config.php");
if (!$_SESSION["username"]) {
    header('Location:login.php?msg=1');
}
ini_set('display_errors', 1);
?>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CsocTrain Lab</title>

    <link href="css/htmlstyles.css" rel="stylesheet">
</head>

<body>
    <div class="container-narrow">

        <div class="jumbotron">
            <p class="lead" style="color:white">
                Welcome <?php echo $_SESSION["username"]; ?>!! You are now logged in!</a>
            </p>
        </div>

        <div class="footer">
            <p>csoc{48b3e67224613290f1a9e8fc7c9b7934}</p>
        </div>

        <div>

        </div>
        <div class="footer">
            <p>
            <h4><a href="logout.php">Logout</a>
                <h4>
                    </p>
        </div>


        <div class="footer">
            <p>Csoc Lab | csoctrainlab</p>
        </div>

    </div> <!-- /container -->

</body>

</html>