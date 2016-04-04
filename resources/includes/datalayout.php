<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html>
	<html class="no-js" xml:lang="en" lang="en">
	<head>
	<!--  Bootstrap  -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
	<!--  CSS Files -->
	<link rel="stylesheet" href="dogsRUs.css" type="text/css" media="screen"/>
	<!--  Javascript Files -->
    <!--  For some reason, this does not work :: <script type="text/javascript" src="../resources/js/dogsRUs.js"></script>-->
	<script type="text/javascript" src="dogsRUs.js"></script>
	
	<title>Dogs 'R Us</title>
	</head>
	<body>
	
	<div id = "layout">
		<div class="row">
			<div class= "col-md-4" name="sarah" onclick="description('sarah')">
				<img src="http://www.cutestpaw.com/wp-content/uploads/2011/11/cute-puppy1.jpg" >
				<h4>Sarah</h4>
				<p>Lived in tiny cups for 90% of her life.
					<br><em>One mile away</em>
				</p>
			</div>
			<div class= "col-md-4" >
				<img src="http://i.imgur.com/qNoTX.jpg">
				<h4>Bruno</h4>
				<p>Tilts for days
					<br><em>1.5 miles away</em>
				</p>
			</div>
			<div class= "col-md-4" name="willow" onclick="description('willow')">
				<img src="http://i.imgur.com/wOvig8T.gif">
				<h4>Willow</h4>
				<p>Will not stay still, need energetic owner
					<br><em>Right behind you </em>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="http://i.imgur.com/oT4qU.jpg">
				<h4>Britnee</h4>
				<p>Very good replacement for comforter
					<br><em>0.5 miles away</em>
				</p>
			</div>
			<div class="col-md-4">
				<img src="http://i.imgur.com/yyyyPUq.jpg">
				<h4>Godfrey</h4>
				<p>100% Guaranteed Alive, sleeps in warm spots
					<br><em>One mile away</em>
				</p>
			</div>
			<div class="col-md-4">
				<img src="http://i.imgur.com/fWuAnsA.jpg">
				<h4>Sindy with a S</h4>
				<p>Very tiny fluff of life
					<br><em>2 miles away</em>
				</p>
			</div>
		</div>
	</div>
	
	</body>
</html>