<?php

//check if user has clicked the signup button in order to access this page.
if (isset($_POST['submit'])){

    include_once'dbh.inc.php';

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $pax = mysqli_real_escape_string($conn,$_POST['pax']);
    $day = mysqli_real_escape_string($conn,$_POST['day']);

	 //Insert the user into the database
	$sql = "INSERT INTO reservation(name, pax, day)" . "VALUES ('$name', '$pax', '$day');";
	mysqli_query($conn, $sql);
	header("Location: ../index.php?reservation=success");
	 exit();
}

else{
    header("Location: ../index.php");
    exit();
}

