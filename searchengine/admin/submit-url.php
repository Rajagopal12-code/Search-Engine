<?php session_start();  if(!isset($_SESSION['id'])){

echo"<script>window.open('admin/index.php','_self')</script>";

} 

	
	?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Search Engine | Submit URL</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
<?php include("./nev.php"); ?>
<div class="wrapper indexPage" style="background-color: lightblue;">
    <div class="mainSection">
        <div class="logoContainer">
            <img src="assets/images/search.png" alt="Search Console Submit Url">
        </div>
        <div class="searchContainer">
            <form method="post" id="formSubmitUrl">
                <input type="url" class="searchBox" name="url" placeholder="Enter url" required>
                <label class="textGradient"></label>
                <input type="submit" class="searchButton" id="buttonSubmit"  value="Submit">
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#formSubmitUrl").submit(function (e) {
            e.preventDefault();
            $( ".textGradient" ).text( "Processing Please wait..." );
            $("#buttonSubmit").prop('disabled', true);
            $.ajax({
                type: 'post',
                url: 'crawl.php',
                data: $('form').serialize(),
                success: function () {
                    $("#buttonSubmit").text('disabled', false);
                    $( ".textGradient" ).html( "The system has received the url" );
                }
            });
        })
    })
</script>
</body>
</html>