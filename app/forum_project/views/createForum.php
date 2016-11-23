<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("header.html");
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Forums</title>

</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <form id="forumInfo" method="post" enctype="multipart/form-data" action="submit" class="form-horizontal" role="form">
				<div class="row">
					<div class="col-sm-1">
						<label for="title" class="control-label">
							Title
						</label>
					</div>
					<div class="col-sm-11">
						<input
							type="text"
							name="title"
							class="form-control"
							id="title"
							required
							data-validation-required-message="All entries must have a title."
							value=""
						>
					</div>
				</div>
        <br>
				<div class="row">
					<div class="col-sm-2">
						<label for="title" class="control-label">
							Description
						</label>
					</div>
					<div class="col-sm-10">
						<textarea
							name="description"
							class="form-control"
							rows="3"
							required
							data-validation-required-message="Description is required."
							id="description"
						>
						</textarea>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="pull-right">
						<a href="home" class="btn btn-danger">
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
