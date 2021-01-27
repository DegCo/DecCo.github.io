<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale=1">

	<title>Contact Me </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="./style.css" type="text/css" rel="stylesheet">
</head>

<body>
	<header>
	<nav class="navbar navbar-expand-md">
	  <a class="navbar-brand" href="./index.html">Arturo de Giorgi</a>
	  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
	  <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="main-navigation">
	    <ul class="navbar-nav">
	    	<li class="nav-item">
	     		<a class="nav-link" href="./index.html">Home</a>
	    	</li>
	    	<li class="nav-item">
	    		<a class="nav-link" href="./cv.html">CV</a>
	    	</li>
	    	<li class="nav-item">
	    		<a class="nav-link" href="./publications.html">Publications</a>
	    	</li>
	    	<li class="nav-item">
	    		<a class="nav-link" href="./didactics.html">Didactics</a>
	    	</li>
	    	<!--<li class="nav-item">
	    		<a class="nav-link" href="./contact.php">Contact</a>
	    	</li>-->
	    </ul>
	  </div>
	</nav>
	</header>	



	<?php
		$to = "arturodegiorgi96@gmail.com";
	    $name = trim($_POST["name"]);
	    $email = trim($_POST["email"]);
	   	$subject = "Message on Website from {$_POST["name"]}";
	   	$message = trim($_POST["message"]);
	   	$headers = "From:".$email."\r\n".
	   	$count = 4;
	   	if(strlen($name)<2 && isset($_POST["button_pressed"])) {
	    	$count -= 1;
	    }
	    if(!filter_var($email, FILTER_VALIDATE_EMAIL) && isset($_POST["button_pressed"])) {
	    	$count -= 1;
	    }
	    if(strlen($message)<5 && isset($_POST["button_pressed"])) {
			$count -= 1;
	    }
	?>

	<main class="page-header header container-fluid">
		<h3 class="feature-title">Get in Touch!</h3>
		<form method="post" name="send_email" id="send_email" action="<?php if(isset($_POST["button_pressed"]) && $count === 4){echo "./contact_thanks.php";}?>">
			<div class="form-group">
	  			<input required type="text" class="form-control" placeholder="Name" name="name" value="<?= $_POST["name"]?>">
	  			<?php 
	  			if(strlen($name)<2 && isset($_POST["button_pressed"])) {
	       			echo "<p>The name should be at least of 2 letters.</p>";
	    		} 
	  			?>
			</div>
			<div class="form-group">
	  			<input required type="email" class="form-control" placeholder="Email Address" name="email" value="<?= $_POST["email"]?>">
	  			<?php 
	  			if(!filter_var($email, FILTER_VALIDATE_EMAIL) && isset($_POST["button_pressed"])) {
	        		echo  "<p>Please type a valid email address.</p>";
	    		} 
	  			?>
			</div>
			<div class="form-group">
	 			 <textarea required class="form-control" placeholder="Your Message" rows="4" name="message"><?php if(isset($_POST["button_pressed"])){echo $_POST["message"];}?></textarea>
	 			 <?php 
	  			if(strlen($message)<5 && isset($_POST["button_pressed"])) {
	        		echo "<p>The message should be at least of 5 letters.</p>";
	    		} 
	  			?>
			</div>
			<input type="submit" class="btn btn-secondary btn-block" value="Send" name="button_pressed">
			<?php if(isset($_POST["button_pressed"])){echo "<h6>Ops! Something went wrong!</h6>";}?>
		</form>

		<?php
    		if(isset($_POST["button_pressed"]) && $count === 4){
    			//INSERT EMAIL
    			mail($to, $subject , $message , $headers ); 
    			//Submit
    			echo '<script type="text/javascript"> document.send_email.submit(); </script>';
    		}
		?>

	</main>

		
	<footer class="page-footer">
	  	<div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 col-md-8 col-sm-12">
	    			<h6 class="text-uppercase font-weight-bold">Additional Information</h6>
	    			<p>This website was created as online and more general digital CV.</p>
	    		</div>
	    		<div class="col-lg-4 col-md-4 col-sm-12">
	    			<h6 class="text-uppercase font-weight-bold">Contact</h6>
	    			<p>
	    			<br/>arturodegiorgi96@gmail.com
	    			</p>
	    		</div>
	 		</div>
	  	<div class="footer-copyright text-center">© 2021 Copyright: Deg&Co</div>
	</footer>

</body>
</html>