<?php
	include 'konek.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//log in btn
		$Email="";


	if (isset($_POST['btnLogin'])) {
		$Email=$_POST['email'];
		$NewPassword=$_POST['npassword'];
		$sqlSelect="SELECT * FROM tblFacebook WHERE email='$Email' AND npassword='$NewPassword'";
		$query=mysqli_query($connect,$sqlSelect);
		$rows=mysqli_fetch_assoc($query);	
			if($rows['email']==$Email && $rows['npassword']==$NewPassword){
				echo "Log in";
			}
			else{
				echo "Incorrect email or password";
			}	
	}
	else{
		echo "";
	}

	
?>

</body>
</html>