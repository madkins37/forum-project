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
    <h1>Comments <small></small></h1>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div id="commentsList">

        <?php  

foreach($commments as $comment){

        echo 

        "<div class=\"panel panel-primary\"> 
      <div class=\"panel-heading\">"
       . $comment['userName']

          ."<div class=\"pull-right\">" 
          . "<small>Created At: " . $comment['commentDateCreated'] . "</small>" 
          . "</div>" 

    ."<h3 class=\"panel-title\"></h3>

      </div>
    <div class=\"panel-body\">"
    .$comment['commentContent'] 
  ."</div>
</div>";

$replies = $commentModel->get_replies($threadID, $comment['commentID']);


  foreach($replies as $commentReply){


          echo 

        "<div id=\"commentsReplyList\" style=\"padding-left:100px;\">"


      ."<div class=\"panel panel-success\"> 
      <div class=\"panel-heading\">"
       . $commentReply['userName']

          ."<div class=\"pull-right\">" 
          . "<small>Created At: " . $commentReply['commentDateCreated'] . "</small>" 
          . "</div>" 

    ."<h3 class=\"panel-title\"></h3>

      </div>
    <div class=\"panel-body\">"
    .$commentReply['commentContent'] 
  ."</div>
  </div>
</div>";
}





}
 ?>


      </div>
    </div>
    <div class="col-sm-0">
      
    </div>
  </div>




</body>
</html>