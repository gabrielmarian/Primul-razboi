<?php 
$con=mysqli_connect("localhost", "root", "","ro_rm") or die (mysqli_error());

$email= $_POST['email'];
$parola= $_POST['parola'];

	$cer="SELECT * FROM utilizatori WHERE (Email_utilizator='$email' AND Parola_utilizator='$parola')";
	$r= mysqli_query($con, $cer);
	
	if (mysqli_num_rows($r) == 1) {
		echo "ok";
		
		header('Location:http://localhost/romania_tic/');
	}else{
		echo "utilizator neinregistrat" .mysqli_error($con);
	}
	
?>