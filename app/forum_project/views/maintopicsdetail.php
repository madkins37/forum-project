<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.php");



?><!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <title>Threads</title>

</head>
<body>
<div class="container">
  <div class="page-header">
    <h1>Available Threads<small></small></h1>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div id="threadsList">
      </div>
    </div>
    <div class="col-sm-0">
      
    </div>
  </div>
  <?php include("../scripts/mainThreadsScript.php") ?>
</body>
</html>