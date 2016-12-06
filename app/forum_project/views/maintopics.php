<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.php");
?><!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <title>Topics</title>

</head>
<body>
<div class="container">
  <div class="page-header">
    <h1>Available Topics <small></small></h1>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div id="topicsList">
      </div>
    </div>
    <div class="col-sm-0">
      
    </div>
  </div>
  <?php include("../scripts/mainTopicsScript.php") ?>
</body>
</html>