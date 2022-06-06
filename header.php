
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title(' | ',true,'right'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		</head>
	<body>

    <div class = "navbar navbar-inverse navbar-static-top">
			<div class = "container">
				
				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>
				
				<div class = "collapse navbar-collapse navHeaderCollapse">
				
					<ul class = "nav navbar-nav navbar-right">
					
						<li><a href = "index.php">Главная</a></li>
						<li class = "dropdown">
						</li>
						<li><a href = "novosti.php">Новости</a></li>
						<li><a href = "prod.php" data-toggle="modal">Продукция</a></li>
					
					</ul>
				
				</div>
				
			</div>
		</div>
        <div class = "container">

			<div class = "jumbotron">
				<h2>Post Title</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing.</p>
			</div>

			<div class = "panel panel-default panel-body">
				<div class = "row">
					<div class = "col-md-2">
						<ul class="nav nav-pills nav-stacked">
							<li><a href = "#">Category One</a></li>
							<li><a href = "#">Category Two</a></li>
							<li><a href = "#">Category Three</a></li>
							<li><a href = "#">Category Four</a></li>
						</ul>
					</div>
					<div class = "col-md-10">
						<a href = "#"><h3>This random post is really awesome!</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc arcu erat, congue eget ornare et, luctus eget purus. Etiam et risus metus. Nam sed mi tellus. Mauris molestie massa eu metus tempor, in hendrerit arcu adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p class = "text-muted">Posted by Ahsan on January 1st 2014</p>
					</div>
				</div>
			</div>

		</div>
    