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
                <a class="nav-link" href="./research_interests.html">Research Interests</a>
            </li>
	    	<li class="nav-item">
	    		<a class="nav-link" href="./publications.html">Publications</a>
	    	</li>
	    	<li class="nav-item">
	    		<a class="nav-link" href="./didactics.html">Didactics</a>
	    	</li>
	    	<li class="nav-item">
                <a class="nav-link" href="./hobbies.html">Non-Scientific Interests</a>
            </li>
	    	<li class="nav-item">
	    		<a class="nav-link" href="./contact.php">Contact</a>
	    	</li>
	    </ul>
	  </div>
	</nav>
	</header>

	<main class="page-header header container-fluid">
		<h3 class="feature-title">Dear <?= "{$_POST["name"]}" ?> thank you for your message!</h3>
		<p>I will try to get back to you as soon as possible at <b><?= "{$_POST["email"]}" ?></b>. </p>
		<div class="square-section">
			<h4>Your message:</h4>
			<p>"<?= "{$_POST["message"]}" ?>"</p>
		</div>
	</main>
		
	<footer class="page-footer">
	  	<div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 col-md-8 col-sm-12">
	    			<h6 class="text-uppercase font-weight-bold">Additional Information</h6>
	    			<p>This website was created as online and more general digital CV. <br> Please report any bugs at this <a style="color: #ccc;" href="mailto:arturodegiorgi96@gmail.com" alt="Email"><b>address</b></a>.</p>
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

<!-- Add Jquey & Co -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>