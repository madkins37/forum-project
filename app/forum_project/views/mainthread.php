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
    <h1><?php echo $thread->threadTitle ?> <small></small></h1>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div id="commentsList">
      <div class="well"><?php echo $thread->threadDescription ?></div>

        <?php  

foreach($commments as $comment){

        echo 

        "<div class=\"panel panel-primary\"> 
      <div class=\"panel-heading\">"
       . $comment['userName']

          ."<div class=\"pull-right\">" 
          . "<small>Created At: " . $comment['commentDateCreated'] . " </small>" 
          ."<a href='javascript:void(0);' onclick='replyTo(\"".$comment['userName']."\",\"".$comment['commentID']."\")'>  reply</a>"
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
          . "<small>Created At: " . $commentReply['commentDateCreated'] . " </small>" 
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
  <div class="row">
    <div class="col-sm-12">
      <div id="reply">
      </div>
      <form id="threadComment" method="post" enctype="multipart/form-data" action="<?php echo $baseUrl ?>mainthread/submitComment/<?php echo $threadID ?>" class="form-horizontal" role="form">
        <input type="hidden" id = "hiddenReply" name="replyID" value="" />
        <input type="hidden" name="threadID" value="<?php echo $threadID ?>" />
        <textarea id="wysihtml5-textarea" name="comment" class="form-control" id="sources" rows="4" placeholder="Leave a comment...">
        </textarea>
        <br>
        <button type="submit" id="formSubmit" class="btn btn-success pull-right">
          Post
          <i class="glyphicon glyphicon-ok"></i>
        </button>
      </form>
    </div>
    <div class="col-sm-0">
    </div>
  </div>

<script>
  function replyTo(userName,commentID) {
    var replyElement = document.getElementById('reply');
    replyElement.innerHTML = "<small>Replying to "+userName+"<small><a href='javascript:void(0);' onclick='cancelReply()'> cancel</a>";

    var replyInput = document.getElementById('hiddenReply');
    replyInput.value = commentID;

    console.log(commentID);
    window.scrollTo(0,document.body.scrollHeight);
    return false;
  }

  function cancelReply() {
    var replyElement = document.getElementById('reply');
    replyElement.innerHTML = "";

    var replyInput = document.getElementById('hiddenReply');
    replyInput.value = "";

    return false;
  }
</script>

</body>
</html>