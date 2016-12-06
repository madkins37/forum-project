<script>
  var topics = <?php echo json_encode($topics); ?>;
  console.log(topics);
  var topicsList = document.getElementById('topicsList');

  topics.forEach(function(topic){
    topicsList.innerHTML+=
      "<div class='panel panel-default'>" +
        "<div class='panel-heading'>" +
          "<a href='<?php echo $baseUrl?>main/topics/" + topic.topicID + "'>" +
            topic.topicTitle +
          "</a>" +
          "<div class='pull-right'>" +
            "<small>Topic started: " + topic.topicDateCreated + "</small>" +
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