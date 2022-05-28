
<!DOCTYPE HTML>  
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;background: #EBF4FA;}
.error {color: #FF0000;}
.formbox{
	background: #EBF4FA;
	padding : 5px;
	border-radius :8px;
	overflow:auto;	
	text-align : center;
}
h1{
	display : flex;
	flex-direction : row;
}
h1:before,
h1:after{
	content : "";
	flex : 1 1  ;
	border-bottom: 2px solid #D1D0CE;
	margin : auto;
	padding : 5px;
	width : 100%;
}
table{
	float : left;
	text-align : left;
	padding: 25px;
    width : 100%;
}
tr,td{
	padding: 15px;
	
}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email],input[type=date],input[type=number] {
  width: 200px;
  padding: 6px 20px;
  
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=date]:focus, input[type=number]:focus {
 background-color: #ddd;
  outline: none;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  font-size : 15px;
  border-radius : 15px;
  font-family: cambria;
}

button:hover {
  opacity: 0.8;
}
</style>
<?php 
error_reporting(0);
include 'checkEmpty.php' ;?>
<?php require_once 'validation.php' ?>
</head>
<body>  



	<div class="formbox">
		<h1>Registration</h1>
		<p style = "color:#D1D0CE;"> Create your account It's free and only take a minute</p>
		<table border = 0 align = "center" cellspacing = 0 cellpadding = 1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype ="multipart/form-data" >  
		<tr>
		<td>First Name : </td>
		<td><input type="text" placeholder = "First Name" name="fname" id="fname" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span></td>
		<td>Last Name :</td>
		<td><input type="text" placeholder = "Last Name" name="lname" id="lname" value="<?php echo $lname;?>">
		  <span class="error">* <?php echo $lnameErr;?></span></tr>
		<tr>
		<td>User Name :</td>
		 <td><input type="text" placeholder = "User Name" name="uname" value="<?php echo $usname;?>"><span class="error">* <?php echo $unameErr;?></span></td>
		<td>Password :</td>
		  <td><input type="password" placeholder = "Password" name="password" value="<?php echo $password;?>">
		  <span class="error">* <?php echo $passErr;?></span></td></tr>
		<tr>
		<td>Email :</td>
		  <td><input type="email" placeholder = "Email" name="email" value="<?php echo $email;?>">
		  <span class="error">* <?php echo $emailErr;?></span></td>
		  <td>Upload Image</td> 
		  <td><input accept="image/*" name="photo" id="file" style = "display:flex;" onchange="loadFile(event)" type="file"> <br>
		  
		  </td>
		  </tr>
		<tr>
		<td>DOB :</td>
		<td><input type="date" name="dob"  placeholder = "DOB" value="<?php echo $dob;?>">
		  <span class="error">*<?php echo $DOBErr;?></span></td>
		  <td>  </td>
		  <td rowspan = 3 ><img id="output" width="200" align = "top" name = "image" value="<?php echo $image;?>"> </td>
		  </tr>
		<tr>
		<td>Gender :</td>
		 <td> <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
		  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
		  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
		  <span class="error">* <?php echo $genderErr;?></span></td></tr>
		<tr>
		<td>First Joining Location :</td>
		 <td> <input type="text" name="joining"  placeholder = "First Joining Location" value="<?php echo $joining;?>"></td></tr>
		<tr>
		<td>Institute :</td>
		 <td> <input type="text" name="institute"  placeholder = "Institute" value="<?php echo $institute;?>"></td></tr>
		<tr>
		<td>Mobile Number :</td>
		 <td> <input type="text" name="mobile"  placeholder = "Mobile Number" value="<?php echo $mobile;?>">
		 <span class="error">*<?php echo $mobErr;?></span></td></tr>
		 <tr>
		<td>Designation :</td>
		 <td> <input type="text" name="Designation"  placeholder = "Designation" value="<?php echo $designation;?>"></td></tr>
		<tr>
		<td>Address :</td>  
		<td><textarea name="Address" rows="5" cols="40"><?php echo $Address;?></textarea>
		<span class="error">*<?php echo $addErr;?></span></td></tr>
		<td><button  id="cancle" value="cancle" style = "width : 80%; background-color :red;color : white;font-family: cambria" onclick="cancle()">Cancle </button></td> 
		 <td> <button type="submit" name="submit" value="Submit">Submit</button> </td>
		</tr>
		</form>
		</table>
		<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
function cancle(){
	document.getElementById('fname') = "";
	document.getElementById('lname') = "";
}
</script>
	</div>
</body>
</html>
