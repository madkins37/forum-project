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
      <div class='panel panel-default'>
      <div class='panel-heading'>
        <a href='<?php echo $baseUrl?>mainthread/create/<?php echo $topicID ?>'>
          Create a Thread <span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>
        </a>
      </div>
    </div>
    </div>
    <div class="col-sm-0">
      
    </div>
  </div>
  <?php include("../scripts/mainThreadsScript.php") ?>
</body>
</html>