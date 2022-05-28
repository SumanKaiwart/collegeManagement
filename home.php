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
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href="style.css">
  <title>TurtleMart</title>
</head>
<body>
<table style = "border-collapse:collapse;"  width="100%" bgcolor="#2874F0">
  <tr>
    <td align = "right"><font color = "white">TurtleMart</td>
    <td><input type = "text" placeholder = "Search for product,brands and more"></td>
    <td></td>
    <td></td>
    <td></td>
    <td align = "right"><img src="cart.png"</td>
</tr>
</table>
<div class = "menu">
<ul>
 <li class="active"><a ref="#">category1</a></li>
   <div class="sub-menu">
     <ul>
       <li><a ref="#">sub-cat</a></li> 
       <li><a ref="#">sub-cat</a></li> 
       <li><a ref="#">sub-cat</a></li> 
       <li><a ref="#">sub-cat</a></li> 
     </ul>
   </div>
 <li><a ref="#">category1</a></li>
 <li><a ref="#">category1</a></li>
 <li><a ref="#">category1</a></li>
</ul>
</div>
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
.box{
	width : 1450px;;
	margin-top : 80px;
	hight : auto;
	border-radius : 12px 12px 12px 12px;
	overflow : hidden;
	box-shadow :0 5px 12px rgba(32,32,32,.3);
	margin-right : 20px;
	margin-left : 20px;
	possition : absolute;
	border-bottom : 8px solid #99ffd6;
}
.box th{
	background-color :  #99ffd6;
}
.box tr{
	background-color :  #ccccff;
	text-align : center;
	
}
.box tr:hover{
	background-color : #ccccff;
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
th,td{
	padding : 12px 15px;
	border : 1px solid #fff;
}
tr:nth-child(odd){
	background-color:#f5f5f5;
}

th:hover{
	cursor : pointer;
}
</style>
 <script>
	function sortTable(n)
	{
		var table, rows, switching, i, x, y, shouldSwitch, dir, switchCnt  = 0 ;
		table = document.getElementById("mytable");
		switching = true;
		dir = "asc";
		while(switching){
			switching = false ;
			rows = table.rows;
			for(i=1;i<(rows.length-1); i++){
				shouldSwitch = false;
				 x = rows[i].getElementsByTagName("TD")[n];
				y = rows[i + 1].getElementsByTagName("TD")[n];
				if(dir=="asc"){
					if(x.innerHTML.toLowerCase()>y.innerHTML.toLowerCase()){
						shouldSwitch = true;
						break;
					}
				}else if(dir = "desc"){
					if(x.innerHTML.toLowerCase()<y.innerHTML.toLowerCase()){
						shouldSwitch = true;
						break;
					}
				}
			} if(shouldSwitch){
				rows[i].parentNode.insertBefore(rows[i+1],rows[i]);
				switching = true;
				switchCnt++;
			}else{
				if(switchCnt == 0 && dir == "asc"){
					dir = "desc";
					switching = true;
				}
			}
		}
	}
 </script>
</head>
 <body>
 <?php include "connection.php" ?>

 <div class = "hed">
   <div style = "margin-left:25px;float:right;size : cover;possition:absolute;">
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
 <div>
 <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;margin-left:20px;margin-top:40px;background-color:#3385ff;">store document</button>
 </div>
 <div id="id01" class="modal">
  
  <form class="modal-content animate" action="storedocument.php" method="POST" enctype = "multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <p>Details Of Document</p>
    </div>

    <div class="container">
      <label for="file"><b>Upload file</b></label>
      <input type="file" name="doc" required>

      <label for="topic"><b>Topic</b></label>
      <input type="text" placeholder="Topic Name" name="topic" required>
       <label>
	   <label for="department"><b>Department</b></label>
      <input type="text" placeholder="department Name" name="department" required>
       <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>  
      <button type="submit" name = "submit">Submit</button>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<div >
<form class="example" action="search.php" style="margin:auto;float : right;max-width:300px;margin-right:50px;">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
<div >
<table id = "mytable" style = "border-collapse:collapse;border : 0px solid #fff;" class = "box">
<th onclick = "sortTable(0)">Document Name &#9662</th>
<th onclick = "sortTable(1)">Topic Name &#9662 </th>
<th onclick = "sortTable(2)">Department &#9662 </th>
 <?php 
	$query = "SELECT * FROM document";
	$qudis = mysqli_query($conn,$query);
	while($result = mysqli_fetch_array($qudis))
	{
		if($result['user']==$_SESSION['username'])
		{
 ?>
 <tr>
 <td><?php echo $result['document'];?></td>
 <td><?php echo $result['topic'];?></td>
 <td><?php echo $result['department'];?></td>
 </tr>
	<?php } 
	}
	?>
<tbody>
</table>
 </div>

 </body>
 </html>