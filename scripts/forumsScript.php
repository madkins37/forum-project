<script>
  var forums = <?php echo json_encode($forums); ?>;
  console.log(forums);
  var forumsList = document.getElementById('forumsList');

  forums.forEach(function(forum){
    forumsList.innerHTML+=
      "<div class='panel panel-default'>" +
        "<div class='panel-heading'>" +
          forum.forumTitle +
          "<div class='pull-right'>" +
            "<small>Created By: " + forum.userName + "</small>" +
          "</div>" +
        "</div>" +
        "<div class='panelText' style='margin-left: 2em'>" +
          "<br>" +
          forum.forumDescription +
          "<br><br>" +
        "</div>" +
      "</div>";
  });
</script>