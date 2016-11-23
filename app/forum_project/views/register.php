<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.html");
?><!DOCTYPE html>
<html lang="en">
<head>
  
	<meta charset="utf-8">
	<title>Register</title>

</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <form id="forumInfo" method="post" enctype="multipart/form-data" action="user/create" class="form-horizontal" role="form">
				<div class="row">
					<div class="col-sm-2">
						<label for="title" class="control-label">
							Username
						</label>
					</div>
					<div class="col-sm-4">
						<input
							type="text"
							name="username"
							class="form-control"
							id="title"
							required
							data-validation-required-message="All entries must have a title."
							value=""
						>
					</div>
					<div class="col-sm-2">
						<label for="title" class="control-label">
							Password
						</label>
					</div>
					<div class="col-sm-4">
						<input
							type="text"
							name="password"
							class="form-control"
							rows="3"
							required
							data-validation-required-message="Description is required."
							id="description"
						>
					</div>
				</div>
        <br>
				<div class="row">
				</div>
				<br>
				<div class="row">
					<div class="pull-right">
						<a href="<?php echo $baseUrl ?>home" class="btn btn-danger">
							<i class="glyphicon glyphicon-remove"></i>
							Cancel
						</a>
						<button type="submit" id="formSubmit" class="btn btn-success">
							Submit
							<i class="glyphicon glyphicon-chevron-right"></i>
						</button>
					</div>
				</div>
      </form>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-default phone">
				<div class="panel-heading">
					Your Account
				</div>
				<div class="panelText" style="margin-left: 2em">
					<br>
					[ ] Your account name and logo
					<br>
					<br>
				</div>
				<div class="panel-heading">
					Existing Forums
				</div>
				<div class="panelText" style="margin-left: 2em">
					<br>
					-> Existing Forum <br>
					-> Existing Forum <br>
					-> Existing Forum
					<br>
					<br>
				</div>
			</div>
    </div>
  </div>
</body>
</html>