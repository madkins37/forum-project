<script>
  var topics = <?php echo json_encode($topics); ?>;
  var forumsList = document.getElementById('forumsList');

  topics.forEach(function(topic){
    topicsList.innerHTML+=
      "<div class='panel panel-default'>" +
        "<div class='panel-heading'>" +
          "<a href='#'>" +
            topic.topicTitle +
          "</a>" +
          "<div class='pull-right'>" +
            "<small>Created By: " + topic.userName + "</small>" +
          "</div>" +
        "</div>" +
        "<div class='panelText' style='margin-left: 2em; margin-right: 2em'>" +
          "<br>" +
          topic.topicDescription +
          "<br><br>" +
        "</div>" +
      "</div>";
  });
</script>