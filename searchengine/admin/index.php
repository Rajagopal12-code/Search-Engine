<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php include("./nev.php"); ?>
    <div class="wrapper indexPage" style="background-color: lightblue;">
        <div class="mainSection">
            <div class="searchContainer">
                <form action="login_process.php" method="POST">
<h3>Login</h3>
                    <input type="text" class="searchBox" name="username" required style="width:300px;" placeholder="User Name"><br>
					<input type="password" class="searchBox" name="password" required style="width:300px;"  placeholder="Password"><br>
					
                    <input type="submit" class="searchButton" value="Login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>