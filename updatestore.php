
<?php 
include 'connection.php' ?>
<?php
if(isset($_POST['submit'])){
		$fname = mysqli_real_escape_string($conn,$_POST['fname']);
		$lname = mysqli_real_escape_string($conn,$_POST['lname']);
		$username = mysqli_real_escape_string($conn,$_POST['uname']);
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
		
		$uname = $_SESSION['username'];
		$updt = "UPDATE registration SET firstname='$fname',lastname='$lname',username='$username',password='$password',email='$email',image='$folder',dob='$dob',gender='$gender',first_join_location='$joining',institute='$institute',mobile=$mobile,designation='$Designation',Address='$Address' WHERE firstname =  '$uname' "; 
     	$query = mysqli_query($conn,$updt);
		IF($query){
		?>
		<script>
		 alert("Profile has updated!!!!");
		</script>
		<?php
		}
		else{
			echo " error ". mysqli_error($conn);
		}
}
		