<?php
    SESSION_start();
	include "connection.php" ;
		$username = $_SESSION['username'] ;
		$topicname = $_POST['topic'];
		$departname = $_POST['department'];
		$filename = $_FILES['doc']['name'];
		$tmpn = $_FILES['doc']['tmp_name'];
		$fileexp = explode('.',$filename);
		$filecheck = strtolower(end($fileexp));
		$fileextstored = array('png','jpg','jpeg','pdf','mp4');
		if(in_array($filecheck,$fileextstored)){
			$folder = 'image/'.$filename;
			move_uploaded_file($tmpn,$folder);
			$qu = "INSERT INTO document(document,topic,department,user) VALUES('$folder', '$topicname', '$departname','$username')" ;
			$sql = mysqli_query($conn,$qu);
			if($sql){
				?>
			<script>
			alert("store document!!!!");
			window.location = "home.php";
			</script>
			<?php
			}
			else{
				echo "error " . $qu . mysqli_error($conn);
			}
		}else{
			echo "this extension is not accepted " . mysqli_error($conn);
		}
	
	?>
	