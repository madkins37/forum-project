<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.php");
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome!</title>
</head>
<body>

<div class="container">
	<h1>Most Recent Threads</h1>

	<?php foreach($threads as $key=>$value) { ?>
	<div class="row">
		<div class="col-xs-12">
			<div class='panel panel-default'>
        <div class='panel-heading'>
          <a href='<?php echo $baseUrl?>main/topics/thread/<?php echo $value->threadID ?>'>
            <?php echo $value->threadTitle; ?>
          </a>
          <div class='pull-right'>
            <small>thread started: <?php echo $value->threadDateCreated; ?></small>
          </div>
        </div>
        <div class='panelText' style='margin-left: 2em; margin-right: 2em'>
          <br>
          <?php echo $value->threadDescription; ?>
          <br><br>
        </div>
      </div>
		</div>
	</div>
	<?php } ?>

	<?php include("footer.html"); ?>
</div>
</body>
</html>
