<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.php");
?><!DOCTYPE html>
<html lang="en">
<head>
  
	<meta charset="utf-8">
	<title>Forums</title>

</head>
<body>
<div class="container">
	<div class="page-header">
		<h1>Available Forums <small>For your reading pleasure</small></h1>
	</div>
  <div class="row">
    <div class="col-sm-12">
      <div id="forumsList">
			</div>
    </div>
    <div class="col-sm-0">
      
    </div>
  </div>
	<?php include("../scripts/forumsScript.php") ?>
</body>
</html>