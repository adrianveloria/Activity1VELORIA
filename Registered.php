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
    if (isset($_POST['register'])) {
        // Initialization
        if (isset($_POST['gender'])) {       
        $Firstname = $_POST['fname'];
        $Lastname = $_POST['lname'];
        $Email = $_POST['email'];
        $NewPassword = $_POST['npassword'];
        $Month= $_POST['month'];
        $Day = $_POST['day'];
        $Year = $_POST['year'];
        $gender = $_POST['gender'];
              
          $sqlInsert = "INSERT INTO `tblFacebook`(`fname`,`lname`,`email`,`npassword`,`month`,`day`,`year`,`gender`)VALUES('$Firstname','$Lastname','$Email','$NewPassword','$Month',$Day,$Year,'$gender')";
           $query= mysqli_query($connect,$sqlInsert);
           if ($query == TRUE) {
				echo "<strong>Record Added</strong>";
			}else{
				echo "<strong>Record not Added</strong>";
			}
		 } 
		}
       ?>
	

</body>
</html>