<?php SESSION_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href="homestyle.css">
<style>
body {
  font-family: Arial;
background-color :#eeeeee;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 11px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
.formbox{
	background: #EBF4FA;
	padding : 5px;
	border-radius :8px;
	overflow:auto;	
	text-align : center;
}
.formbox table{
	float : left;
	text-align : left;
	padding: 25px;
    width : 100%;
}
.formbox tr,td{
	padding: 15px;
	
}
.formbox input[type=text], input[type=password],input[type=email],input[type=date],input[type=number] {
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
.formbox button {
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

.formbox button:hover {
  opacity: 0.8;
}
.user ul li:hover .sub{
		display : block;
	    background	: rgb(0,100,0);
		margin-bottom : 35px;
		background-color: #4CAF50;
		
	}
.sub a{
	color:white;
	font-style:none;
}
</style>
</head>
 <body>
 <?php include "connection.php" ?>
 <?php include "updatestore.php" ?>

 <div class = "hed">
 <div style = "float : left;margin-left:20px;margin-top:20px;background-color:blue;border-radius:10px;"><a href = "home.php" style = "color:white;font-size:20px;padding:20px;">HOME</a></div>
   <div class = "user">
   <?php 
        $uname = $_SESSION['username'];
		$query = "SELECT * FROM registration WHERE firstname =  '$uname'";
		$sql = mysqli_query($conn,$query);
		$rowcnt = mysqli_num_rows($sql);
		if($rowcnt){
			$img = mysqli_fetch_assoc($sql);
			$image = $img['image'];
			echo "
       <a href = '#'><img src = '".$image."' width = '50px' height = '40px' alt = 'img'></a>";
	    }
		else{
			echo"eroor ";
		}
	?> 
	  <div class = "user" style = "margin-top: 10px;float:right;size:cover;max-width:150px;possition:absolute;"><ul><li><?php echo $_SESSION['username'] ;?>  &#9663
	  <div class = "sub">
	    <ul><li><a href = "logout.php" style = "text-decoration : none;">logout</a></li>
		<li><a href = "profile.php" style = "text-decoration : none;">profile</a></li></ul>
	    </div>
	  </li>
	  </ul>
   </div>
  </div>
  </div>
 <div class="formbox">
		<table border = 0 align = "center" cellspacing = 0 cellpadding = 1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype ="multipart/form-data" >  
		<tr>
		<td>First Name : </td>
		<?php  $uname = $_SESSION['username'];
	$query = "SELECT * FROM registration WHERE firstname = '$uname'";
	$qudis = mysqli_query($conn,$query);
	if($qudis){
		while($result = mysqli_fetch_array($qudis))
		{
 ?>
		<td><input type="text" placeholder = "First Name" name="fname" value="<?php echo $result['firstname'];?>"></td>
		<td>Last Name :</td>
		<td><input type="text" placeholder = "Last Name" name="lname" value="<?php echo $result['lastname'];?>"></tr>
		<tr>
		<td>User Name :</td>
		 <td><input type="text" placeholder = "User Name" name="uname" value="<?php echo $result['username'];?>"></td>
		<td>Password :</td>
		  <td><input type="password" placeholder = "Password" name="password" value="<?php echo $result['password'];?>">
		  </td></tr>
		<tr>
		<td>Email :</td>
		  <td><input type="email" placeholder = "Email" name="email" value="<?php echo $result['email']; ?>"></td>
		  <td>Upload Image</td> 
		  <td><input accept="image/*"  id="file" name="photo" style = "display:flex;" onchange="loadFile(event)" type="file"> <br>
		  
		  </td>
		  </tr>
		<tr>
		<td>DOB :</td>
		<td><input type="date" name="dob"  placeholder = "DOB" value="<?php echo $result['dob'];?>"></td><td>  </td>
		  <td rowspan = 3 ><img id="output" width="200" align = "top" name = "image" value="<?php ?>"> </td>
		  </tr>
		<tr>
		<td>Gender :</td>
		 <td> <input type="radio" name="gender" <?php if ($result['gender']=="female") echo "checked";?> value="female">Female
		  <input type="radio" name="gender" <?php if ($result['gender']=="male") echo "checked";?> value="male">Male
		  <input type="radio" name="gender" <?php if ($result['gender']=="other") echo "checked";?> value="other">Other </td></tr>
		<tr>
		<td>First Joining Location :</td>
		 <td> <input type="text" name="joining"  placeholder = "First Joining Location" value="<?php echo $result['first_join_location'];?>"></td></tr>
		<tr>
		<td>Institute :</td>
		 <td> <input type="text" name="institute"  placeholder = "Institute" value="<?php echo $result['institute'];?>"></td></tr>
		<tr>
		<td>Mobile Number :</td>
		 <td> <input type="text" name="mobile"  placeholder = "Mobile Number" value="<?php echo $result['mobile'];?>"></td></tr>
		 <tr>
		<td>Designation :</td>
		 <td> <input type="text" name="Designation"  placeholder = "Designation" value="<?php echo $result['designation'];?>"></td></tr>
		<tr>
		<td>Address :</td>  
		<td><textarea name="Address" rows="5" cols="40"><?php echo $result['Address'];?></textarea>
		</td></tr>
		<?php }
	}else{
		echo "result not found";
	}
		?>
		 <tr><td> <button type="cancle" name="cancle" value="cancle" style = "width : 80%; background-color :red;color : white;font-family: cambria">Cancle</button> </td> 
		 <td> <button type="submit" name="submit" value="Submit">Update</button> </td>
		</tr>
		</form>
		</table>
				<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
	</div>
</body>
</html>