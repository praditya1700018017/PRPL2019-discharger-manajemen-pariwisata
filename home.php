<?php 
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/Customhomeadmin.css">
 </head>
 <body>
 	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse nav navbar-nav navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://www.malasngoding.com">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Profil</a></li>
        <li><a href="kotakpesan">Kotak Pesan</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog
						<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Pendidikan</a></li>
            <li><a href="#">Kesehatan</a></li>
            <li><a href="#">Lingkungan</a></li>
          </ul>
        </li>
        <li><a href="#">Donasi</a></li>
        <li><a href="#">info Grafis</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
	<div class="col-md-6 col-md-offset-3 content kotak content" >
			<h3>Halaman Admin</h3> 
	</div>
 	
 	<footer class="footer text-center" style="float: left">
	<p>Copyright &copy; Programmer Muda Yogyakarta</p>
	</footer>
 </body>
 <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </html>