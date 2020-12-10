<?php
	include 'konek.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Demo</title>
</head>
<style type="text/css">
		input{
			margin-left: 40px;
			margin-bottom: 3px;
			margin-top: 5px;
			height: 20px;
		}
	</style>
<body>

		<table border="1">
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Password</th>
			<th>Month</th>
			<th>Day</th>
			<th>Year</th>
			<th>Gender</th>
		<?php
			//retrieving of records from mysql database
			$sqlSelect = "SELECT * FROM tblFacebook";
			$query = mysqli_query($connect,$sqlSelect);
			$num = mysqli_num_rows($query);
			while($row = mysqli_fetch_array($query)){
			?>	
				<tr>
					<td><?=$row['fname']?></td>
					<td><?=$row['lname']?></td>
					<td><?=$row['email']?></td>
					<td><?=$row['npassword']?></td>
					<td><?=$row['month']?></td>
					<td><?=$row['day']?></td>
					<td><?=$row['year']?></td>
					<td><?=$row['gender']?></td>
				</tr>

			<?php
		}
		?>
			<tr>
				<td><?=$num?> Record(s) Found!</td>
			</tr>
		</table>
	</div>
</body>
</html>