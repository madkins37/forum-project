<script>
  var threads = <?php echo json_encode($threads); ?>;
  console.log(threads);
  var threadsList = document.getElementById('threadsList');

  threads.forEach(function(thread){
    threadsList.innerHTML+=
      "<div class='panel panel-default'>" +
        "<div class='panel-heading'>" +
          "<a href='<?php echo $baseUrl?>main/topics/thread/" +thread.threadID + "'>" +
            thread.threadTitle +
          "</a>" +
          "<div class='pull-right'>" +
            "<small>Created By: " + thread.userName + "</small>" +
          "</div>" +
        "</div>" +
        "<div class='panelText' style='margin-left: 2em; margin-right: 2em'>" +
          "<br>" +
          thread.threadDescription +
          "<br><br>" +
        "</div>" +
      "</div>";
  });
</script>