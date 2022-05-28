
    <?php     
            $username = $_POST['aname'];  
            $password = $_POST['aPassword'];  
         
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);   

              mysql_connect("localhost","root","");
			  mysql_select_db("college");
            $result = mysql_query("select * from admin where name = '$username' and password = '$password'")
			          or die("error ".mysql_error());  
            $row = mysql_fetch_array($result);  
            if ($row['name'] == $username && $row['password'] == $password ){
				echo "login successs " .$row['name'] ;
			
			}else{
				echo "error " . mysql_error();
			}
				
    ?> 
