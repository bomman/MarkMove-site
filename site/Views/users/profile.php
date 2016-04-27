<?php 
namespace site\Views\users;?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= $this->user->getNickname();?></title>
	<link rel="stylesheet" type="text/css" href="../style/reset.css">
	<link rel="stylesheet" type="text/css" href="../style/bootstrap-style.css">
	<link rel="stylesheet" type="text/css" href="../style/header-footer-style.css">
	<link rel="stylesheet" type="text/css" href="../style/default.css">
	<link rel="stylesheet" type="text/css" href="../style/profile.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="wrapper">
		<header>
		<?php 
			require_once 'Views/header.php';?>
		</header>

		<main>
			<div class="container">
				<div class="fb-profile">
					<a href="#" class="profile-picture">
						<img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
					</a>
	 				<a href="#" class="profile-picture">
	 					<img align="left" class="fb-image-profile thumbnail" src="<?php
						$filePath = $_SERVER['DOCUMENT_ROOT'].'/site/images/profile/'.$this->user->getNickname().'.jpg';
						if (file_exists($filePath)) {
						 	echo '../images/profile/'.$this->user->getNickname().'.jpg';
						 }
						 else
						 {
						 	echo 'http://localhost/site/images/profile/default.jpg';
						 } 
						  ?>"/>
	 				</a>

<!-- 							<form action="" method="post" enctype="multipart/form-data">
    							Select image to upload:
   								<input type="file" name="fileToUpload" id="fileToUpload">
								<input type="submit" value="Upload Image" name="upload_profile_picture">
							</form> -->

					<div class="profile-menu">
						<ul>
							<li><a href="#">Photos</a></li>
							<li><a href="#">Videos</a></li>
							<li><a href="#">Activities</a></li>
							<li><a href="#">Groups</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="#">Friends</a></li>
						</ul>
						<div class="change-picture">
							<a href="profile-change-picture.php" role="button">
								<i class="fa fa-edit"></i>
								<span id="change-text">Change picture</span>
							</a>
						</div>
					</div>
				</div> 

			    <!-- <div data-role="popup" id="myPopup">
			      <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
			      <img src="http://lorempixel.com/850/280/nightlife/5/"alt="Skaret View">
			    </div> -->
			    
			    <div class="content">
			    	<div class="sidebar">
			    		<div class="profile">
							<div class="profile-name">
								<?= $this->user->getNickname();?>
							</div>
							<div>
								<table class="profile-info">
									<tr>
										<td><i class="fa fa-pencil-square"></i></td>
										<td>Write something about you...</td>
									</tr>
									<tr>
									</tr>
									<tr>
										<td><i class="fa fa-home"></i></td>
										<td>Born from a boom-box</td>
									</tr>
								</table>
							</div>
						</div>
			    	</div>

			    	<div class="newsfeed">
				    	<div class="add-post">
					    	<div class="general">
					    		<div class="post-element user">
					    			<a href="#" class="profile-picture">
					    				<img align="left" src="<?php
										$filePath = $_SERVER['DOCUMENT_ROOT'].'/site/images/profile/'.$this->user->getNickname().'.jpg';
										if (file_exists($filePath)) {
										 	echo '../images/profile/'.$this->user->getNickname().'.jpg';
										}
										else
										{
										 	echo 'http://localhost/site/images/profile/default.jpg';
										} 
										?>"/>
					    			</a>
					    		</div>

					    		<div class="post-element content">
					    			<div class="input-group">
										<textarea placeholder="What do you want to say?"required></textarea>
									</div>	
					    		</div>
					    	</div>

					    	<div class="sufix">
					    		<div class="post-element">
					    			<a href="#">
					    				<i class="glyphicon glyphicon-picture"></i>
					    			</a>
					    		</div>

					    		<div class="post-element action">
					    			<input class="commit" name="commit" type="submit" value="Post"></input>
					    		</div>
					    	</div>	  
				    	</div>  						    		
			    	</div>
			    </div>
			</div> <!-- /container -->
		</main>

		<footer>
			<?php 
			require_once 'Views/footer.php';?>
		</footer>
    </div>
</body>
</html>