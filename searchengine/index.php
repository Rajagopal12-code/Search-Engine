<?php //session_start();  if(!isset($_SESSION['id'])){

//echo"<script>window.open('admin/index.php','_self')</script>";

//} 

	
	?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Search Engine Analyzer Tool</title>
    <link rel="stylesheet" href="assets/css/style.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php //include("nev.php"); ?>
    <div class="wrapper indexPage" style="background-color: lightblue;">
        <div class="mainSection">
		<p style="background-color: yellow; font-size: 25px;">Web Search Engine Analyzer Tool</p>
            <div class="logoContainer">
			
               <img src="assets/images/search.png" alt="Serach Title">
            </div>
            <div class="searchContainer">
                <form action="search.php" method="get">
                    <input type="text" class="searchBox" name="term" Placeholder="Enter Search Query">
                    <input type="submit" class="searchButton" value="Search" style="background-color:blue; 
  border: none;
  color: white;

  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;">
                </form>
            </div>
        </div>
    </div>
</body>
</html>