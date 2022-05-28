<?php 
error_reporting(0);
include 'connection.php' ?>
<?php
if(isset($_POST['submit'])){
		$fname = mysqli_real_escape_string($conn,$_POST['fname']);
		$lname = mysqli_real_escape_string($conn,$_POST['lname']);
		$uname = mysqli_real_escape_string($conn,$_POST['uname']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$dob = mysqli_real_escape_string($conn,$_POST['dob']);
		$gender = mysqli_real_escape_string ($conn,$_POST['gender']);
		$joining = mysqli_real_escape_string($conn,$_POST['joining']);
		$institute = mysqli_real_escape_string($conn,$_POST['institute']);
		$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
		$Designation = mysqli_real_escape_string($conn,$_POST['Designation']);
		$Address = mysqli_real_escape_string($conn,$_POST['Address']);
		$file = $_FILES['photo'];
		$filename = $file['name'];
		$tempname = $file['tmp_name'];
		$fileerror = $file ['error'];
		$folder = "image/".$filename;
		move_uploaded_file("$tempname","$folder");		
		
		$emailquery = "SELECT * FROM  registration WHERE email = '$email'";
		
		$query = mysqli_query($conn,$emailquery);
		$emailcount = mysqli_num_rows($query);
		
		if($emailcount>0){
			echo "email already exist" ;
		}else{
		$inquery = "INSERT INTO registration(firstname, lastname, username, password, email,image,dob, gender, first_join_location, institute,mobile, designation, Address)
			VALUES('$fname','$lname','$uname','$password','$email','$folder','$dob','$gender','$joining','$institute',$mobile,'$Designation','$Address')";
		
			$iquery = mysqli_query($conn,$inquery);
		if($iquery){
			echo "insert successfully" ;
?>
			<script>
			location.replace("login.php");
			</script>
		<?php
		}else{
		?>
		<script>
			alert(" please fill all the fields");
			</script>
<?php
}
}
}	
	?>