		<!--- Navigation -->
		<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Yeates Painting</a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
            <a class="nav-link <?php if($page=="home"){echo "active";}?> " href="index.php">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link <?php if($page=="gallery"){echo "active";}?> " href="gallery.php">Gallery</a>
					<li class="nav-item">
						<a class="nav-link <?php if($page=="problems"){echo "active";}?> " href="problems.php">Problems We Resolve</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=="testamonials"){echo "active";}?> " href="testamonials.php">Testamonials</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if($page=="contact-us"){echo "active";}?> " href="contact-us.php">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->