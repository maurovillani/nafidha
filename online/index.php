<?php 
$page = "home";
include "controllers/common.inc.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Nafidha Holiday Taste</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php include('parts/metatags.inc.php'); ?>
		<?php include('parts/includes.inc.php'); ?>
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
			<?php include('parts/header.inc.php'); ?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Nafidha Holiday Taste</h2>
							<p><?php if($jsonpage) echo($jsonpage->header); ?></p>
						</header>
						<span class="image"><img src="images/logo-complete.png" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2><?php if($jsonpage) echo($jsonpage->introtitle); ?></h2>
										<p><?php if($jsonpage) echo($jsonpage->introheader); ?></p>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<p><?php if($jsonpage) echo($jsonpage->introcontent1); ?></p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p><?php if($jsonpage) echo($jsonpage->introcontent2); ?></p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2><?php if($jsonpage) echo($jsonpage->lacasatitle); ?></h2>
							<p><?php if($jsonpage) echo($jsonpage->lacasaintro); ?></p>
						</header>
						<p><?php if($jsonpage) echo($jsonpage->lacasacontent); ?></p>
						<ul class="actions">
							<li><a href="nafidha-la-casa.php" class="button"><?php echo(BTNSCOPRI); ?></a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2><?php if($jsonpage) echo($jsonpage->visitaretitle); ?></h2>
							<p><?php if($jsonpage) echo($jsonpage->visitareintro); ?></p>
						</header>
						<p><?php if($jsonpage) echo($jsonpage->visitarecontent); ?></p>
						<ul class="actions">
							<li><a href="nafidha-da-visitare.php" class="button"><?php echo(BTNSCOPRI); ?></a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2><?php if($jsonpage) echo($jsonpage->dettaglititle); ?></h2>
							<p><?php if($jsonpage) echo($jsonpage->dettagliintro); ?></p>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-cutlery"></span>
									<h3><?php if($jsonpage) echo($jsonpage->dettagli1title); ?></h3>
									<p><?php if($jsonpage) echo($jsonpage->dettagli1intro); ?></p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-bed"></span>
									<h3><?php if($jsonpage) echo($jsonpage->dettagli2title); ?></h3>
									<p><?php if($jsonpage) echo($jsonpage->dettagli2intro); ?></p>
								</section>
								<section class="4u$ 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-rocket"></span>
									<h3><?php if($jsonpage) echo($jsonpage->dettagli3title); ?></h3>
									<p><?php if($jsonpage) echo($jsonpage->dettagli3intro); ?></p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-lock"></span>
									<h3><?php if($jsonpage) echo($jsonpage->dettagli4title); ?></h3>
									<p><?php if($jsonpage) echo($jsonpage->dettagli4intro); ?></p>
								</section>
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-paper-plane"></span>
									<h3><?php if($jsonpage) echo($jsonpage->dettagli5title); ?></h3>
									<p><?php if($jsonpage) echo($jsonpage->dettagli5intro); ?></p>
								</section>
								<section class="4u$ 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-bus"></span>
									<h3><?php if($jsonpage) echo($jsonpage->dettagli6title); ?></h3>
									<p><?php if($jsonpage) echo($jsonpage->dettagli6intro); ?></p>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions">
								<li><a href="nafidha-contatti.php" class="button"><?php echo(BTNSCOPRI); ?></a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2><?php if($jsonpage) echo($jsonpage->contattacititle); ?></h2>
							<p><?php if($jsonpage) echo($jsonpage->contattaciintro); ?></p>
						</header>
						<form method="post" action="nafidha-contatti.php" class="container 50%">
							<div class="row uniform 50%">
								<div class="12u$ 12u$(xsmall)"><input type="submit" value="<?php echo(BTNCONTATTI); ?>" class="fit special" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
			<?php include('parts/footer.inc.php'); ?>

		</div>

		<!-- Scripts -->
		<?php include('parts/scripts.inc.php'); ?>

	</body>
</html>