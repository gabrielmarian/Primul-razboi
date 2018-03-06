<?php
$nume = $_POST['nume'];
$prenume= $_POST['prenume'];
$clasa=$_POST['clasa'];
$email= $_POST['email'];
$parola= $_POST['parola'];
$con=mysqli_connect("localhost", "root", "","ro_rm") or die (mysqli_error());
$ins="INSERT into utilizatori(Nume_utilizator,Prenume_utilizator,Clasa,Email_utilizator,Parola_utilizator) values('$nume', '$prenume','$clasa','$email','$parola')";
$rezultat= mysqli_query($con,$ins);
if($rezultat) {
	echo "Inserare reușită";
} else {
	echo mysqli_error($con);
}


?>