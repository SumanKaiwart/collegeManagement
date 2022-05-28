<?php SESSION_start();?>
<html>
<head>
	<meta name "viewport" content = "width = device-width,initial-scale = 1.0" >
    <link rel = "stylesheet" type = "text/css" href = "style.css">
	<title>Login page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style> 
	.error {
		color: #FF0000;
		text-align : center;
		}
     @media screen and (max-width: 800px) {
    .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .back{
	height :100%;
	width : 100%;
	/*background-image:url("type.jpg") ;*/
	background-color:#EBF4FA;
    background-position: center;
	background-size : cover;
    position : absolute;
}
.formbox{
	width : 300px;
	height : 480px;
	position : relative;
	margin : 6% auto ;
	background: linear-gradient(0.15turn,#f69d3c , #ebf8e1,#6EF5DD );#00ace6#00ace6#00ace6#00ace6;
	padding : 5px;
	border-radius :8px;
	overflow:hidden;
	box-shadow: 0 0 20px 1px;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 80%;
  margin-bottom: 15px;
}
	 }
   </style>
</head>
 <body>
   <?php     $nameErr = "";
          if(isset($_POST['uname'],$_POST['Password'])){
            $username = $_POST['uname'];  
            $password = $_POST['Password'];  
         

              $server = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$conn = mysqli_connect($server, $username, $password,$dbname);
if(!$conn){
echo "connection failed: ".mysqli_connect_error();
}
else {
	echo "" ;
	
}
            $result = mysqli_query($conn,"select * from registration where firstname = '$username' and password = '$password'")
				or die("error ".mysql_error());
            $row = mysqli_fetch_array($result); 
			
            if ($row['firstname'] == $username && $row['password'] == $password ){
				$_SESSION['username'] = $row['firstname'];
			?>
			<script>
			 location.replace('home.php');
			</script>
			<?php
			}else{
				$nameErr = "User not fountd........" ;
			}
		  }
	  
    ?> 
	<?php     $nameErr = "";
          if(isset($_POST['aname'],$_POST['aPassword'])){
            $adminname = $_POST['aname'];  
            $adminpassword = $_POST['aPassword'];  
              mysqli_connect("localhost","root","");
			  mysqli_select_db("college");
            $query = mysqli_query("select * from admin where name = '$adminname' and password = '$adminpassword'")
			          or die("error ".mysql_error());  
            $rowcnt = mysqli_fetch_array($query); 
			
            if ($rowcnt['name'] == $adminname && $rowcnt['password'] == $adminpassword ){
				$_SESSION['adminname'] = $row['name'];
			?>
			<script>
			 location.replace('admin.php');
			</script>
			<?php
			}else{
				$nameErr = "admin not fountd........" ;
			}
		  }
	  
    ?>
     <div  class = "back sidebar">
	 <p class="error"><?php echo $nameErr;?></p>
	   <div class ="formbox">
	     <div class ="btnbox">
		   <div id="btn"></div>
		    <button type="button" class = "togglebtn" onclick = "ulogin()">User</button>
			<button type="button" class = "togglebtn" onclick = "alogin()">Admin </button>
		 </div>
		 <div class = "socil">
	        <img src = "facebook.png">	 
	        <img src = "twitter-squared.png">	
			<img src = "google-logo.png">	
		 </div>
		 <form class = "input-group" id ="userlog" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		  <div class="input-container">
		 <i class="fa fa-user icon"></i>
		   <input type = "text" class = "input-field" placeholder = "User Id" name = "uname" required>
		    </div>
		   <div class="input-container">
           <i class="fa fa-key icon"></i>
		   <input type = "password" class = "input-field" placeholder = "Enter Password" name = "Password" required>
		    </div>
		   <input type = "checkbox" class = "check-box"><span>Remeber password</span>
		   <button type ="submit" class = "submit-btn"> Log in </button>
		    <br>
		    <hr>
			<p>Not a member ? <a href ="userRegi.php" > Sign up </a></p>
		   </form>
		   <form class = "input-group" id ="adminlog" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		   <div class="input-container">
		 <i class="fa fa-user icon"></i>
		   <input type = "text" class = "input-field" placeholder = "Admin Id" name = "aname" required>
		     </div>
		   <div class="input-container">
           <i class="fa fa-key icon"></i>
		   <input type = "password" class = "input-field" placeholder = "Enter Password" name = "aPassword" required>
		     </div>
		   <input type = "checkbox" class = "check-box"><span>Remeber password</span>
		   <button type ="submit" class = "submit-btn"> Log in </button> 
		  
		   </form>
	   </div>
	 </div>
	 <script>
	 var x = document.getElementById("userlog");
	 var y = document.getElementById("adminlog");
	 var z = document.getElementById("btn");
	 
	 function ulogin(){
	    x.style.left = "50px";
	   y.style.left = "-450px";
	   z.style.left = "0px";
	 }
	 function alogin(){
	 x.style.left = "-400px";
	   y.style.left = "50px";
	   z.style.left = "110px";
	 }
	  
	 </script>
 </body>	 
</html>