<!DOCTYPE HTML>
<html>

	<head>
		<title>Trupti's Personal Site</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="css/5grid/viewport.js"></script><!--[if lt IE 9]><script src="css/5grid/ie.js"></script><![endif]--><link rel="stylesheet" href="css/5grid/responsive.css" /><!--/5grid-->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
</head>
	<body class="subpage">

		<!-- Header -->
		<?php
	      include'header.php';
	  ?>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="5grid">
						<div class="9u-first">

							<!-- Main Content -->
								<section>
									<header>
										<h2>You can contact me from here!</h2>
										<h3>Hey there!</h3>
									</header>
									<p>
										Myself Trupti Karamchanadani. You can contact me by writing your email in the form
										section which is displayed own there. We will contact you through this mail only.
										So, please check properly whether you have written your proper mail into this textbox or not.
									</p>
									<form method="POST">
										Email: <input type="email" name="txt1" class="form-control" required/>
										<input type="submit">
									</form>
								</section>

						</div>
						<div class="3u">

							<!-- Sidebar -->
								<section>
									<header>
										<h2> <marquee behavior="" direction="right">More news</marquee></h2>
									</header>
									<ul class="link-list">
										<li><a href="#"><marquee>Trendy Technologies in WEB</marquee></a></li>
										<li><a href="#"><marquee>Trendy Technologies in APP</marquee></a></li>
										<li><a href="#"><marquee>Learn more about Data Scientsist</marquee></a></li>

									</ul>
								</section>


						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->

    <?php
		require 'footer.php'
		?>
	</body>
</html>
