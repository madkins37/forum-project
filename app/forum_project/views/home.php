<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.html");
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome!</title>
</head>
<body>

<div class="container-fluid">
	<h1>Generic Forum Name!</h1>

	<?php foreach($topics as $key=>$value) { ?>
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-heading"><?php echo $value->topicTitle; ?></div>
				<div class="panel-body"><?php echo $value->topicDescription; ?></div>
			</div>
		</div>
	</div>
	<?php } ?>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
</body>
</html>
