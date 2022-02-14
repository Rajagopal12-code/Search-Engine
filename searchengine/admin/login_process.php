
<?php
    
	include("../config.php");
	
$msg = ""; 
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  if($username != "" && $password != "") {
    try {
      $query = "select * from admin where `username`=:username and `password`=:password";
      $stmt = $con->prepare($query);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
		session_start();
        $_SESSION['id']   = $row['id'];
          $_SESSION['name'] = $row['Name'];
		
			echo"<script>window.open('submit-url.php','_self')</script>";
			
        
      } else {
       
				echo "<script>alert('Invalid username and password!')</script>";
			echo"<script>window.open('index.php','_self')</script>";	
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    echo $msg = "Both fields are required!";
  }

?>