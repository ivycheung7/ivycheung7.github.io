<?php
	include ("header.php");
    session_start();
    $user=$_SESSION['user'];

    if(isset($_SESSION) && ($_SESSION['user']!='')) {
		echo "<br><br><br><h4 style='text-align:center;'>Welcome back, " . $_SESSION['user'] . "</h4>";
	}
	else {
		echo "<br><br><br><h4 style='text-align:center;'>Please log in or register</h4>";
	}
	
	$query="SELECT * FROM  `petInfo`
    		ORDER BY petId DESC
    		LIMIT 3 ;";

?>
	
<div class="container">
	<div id="introJumbo" class = "jumbotron">
		<div class = "page-header">
			<!-- WHY ARE YOU ALL OPAQUE. DONT YOU DISAPPEAR ON ME -->
			<img src="http://i.imgur.com/iggnrjj.png">
			<h1><strong>Find your new best friend!</strong></h1>
			<h2><strong>Our delivery service will bring animals to you.</strong></h2>
		</div>
	</div>

<!-- HOW IS THIS NOT OPAQUE AND THE OTHER ONE IS -->
	<div id = "howItWorks" class = "jumbotron">
		<div class ="row">
			<div class="col-md-8 col-lg-8">
				<h2><strong>How It Works</strong></h2>
				<ol>
					<strong>
					<h4><li>Search for the animal you want</li></h4>
					<h4><li>Go through the catalog and select an animal</li></h4>
					<h4><li>Confirm that you want the animal and fill out information.</li></h4>
					<h4><li>For rentals, you may choose the length of your trial. (Max set by adoption center)</li></h4>
					<h4><li>(Optional!) Find other animals (max amount depends on type of animal) and have them delivered as well!</li></h4>
					<h4><li>Wait 1-3 business days as we deliver the dog and supplies to you</li></h4>			
					</strong>
				</ol>
			</div>
			<div class = "col-md-4 col-lg-4">
				<img src="http://imgfave-herokuapp-com.global.ssl.fastly.net/image_cache/1382395306827202.jpg">			
			</div>
		</div>
	</div>
</div>
<?php 	

$result = $conn->query($query);
echo '<div id = "layout"><h2> Recently Put Up For Adoption </h2><div class="row">';
while($row = $result->fetch_assoc()) {
	echo'<div class= "col-md-4" >';
	echo "<img src='" . $row['picturePath'] . "'><h4>" . $row['pet_name'] . "</h4><p>" . $row['pet_description'] . "</p>";	
	echo '</div>';
}	
echo'</div></div>';

?>





<!-- 
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
	-->