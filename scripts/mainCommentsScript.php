<script>
  var comments = <?php echo json_encode($comments); ?>;
  console.log(comments);
  var commentsList = document.getElementById('commentsList');

  comments.forEach(function(comment){
    commentsList.innerHTML+=
      "<div class='panel panel-default'>" +
        "<div class='panel-heading'>" +
          "<a href='<?php echo $baseUrl?>main/topics/" + "'>" +
            comment.userName +
          "</a>" +
          "<div class='pull-right'>" +
            "<small>Created At: " + comment.commentDateCreated + "</small>" +
          "</div>" +
        "</div>" +
        "<div class='panelText' style='margin-left: 2em; margin-right: 2em'>" +
          "<br>" +
          comment.commentContent +
          "<br><br>" +
        "</div>" +
      "</div>";
  });
</script>