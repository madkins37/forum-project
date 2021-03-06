<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('url');
$baseUrl = '/forum-project/app/';
$cssPath = '/forum-project/css/main.css';
?>
<head>
	<meta charset="utf-8">
	<title>MODA Forums</title>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo $cssPath; ?>">

  <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">


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
        <a class="navbar-brand" href="<?php echo $baseUrl ?>">Home</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
<!--           <li><a href="#">Placeholder</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Forums<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Placeholder</a></li>
              <li><a href="#">Placeholder</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $baseUrl ?>forum">View All</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo $baseUrl ?>forum/create">Create New</a></li>
            </ul>
          </li> -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Topics<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $baseUrl ?>main/topics/">View All</a></li>
            </ul>
          </li>
        </ul>
				<ul class="nav navbar-nav" style="margin-left: 50vh;">
					<p class="navbar-brand" style="font-size: 36px;">Generic Forum Name</p>
				</ul>
<!--         <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form> -->
        <ul id="userMenu" class="nav navbar-nav navbar-right">
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <script type="text/javascript">$('.dropdown-toggle').dropdown();</script>
  <?php include("../scripts/headerScript.php") ?>
</head>
