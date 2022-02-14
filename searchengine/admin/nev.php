
<nav class="navbar navbar-default" style="background-color: lightblue;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="background-color: yellow;">Web Search Engine Analyzer Tool</a>
    </div>
    <ul class="nav navbar-nav" style="float:right">
      <li><a href="../index.php" style="background-color: yellow;">Home</a></li>
      <li><a href="#"><?php if(isset($_SESSION['name'])) { echo $_SESSION['name']; }?></a></li>
	  <?php if(isset($_SESSION['name'])) {?> 
      <li><a href="logout.php" style="background-color: yellow;">Logout</a></li>
	  <?php } ?>
    </ul>
  </div>
</nav>