<?php 
$page = "casa";
include "controllers/common.inc.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Nafidha Holiday Taste - <?php if($jsonpage) echo($jsonpage->header); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php include('parts/includes.inc.php'); ?>
		<?php include('parts/metatags.inc.php'); ?>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
			<?php include('parts/header.inc.php'); ?>
			
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><?php if($jsonpage) echo($jsonpage->header); ?></h2>
							<p><?php if($jsonpage) echo($jsonpage->intro); ?></p>
						</header>

						<!-- Image -->
						<section>
							<div class="box alt">
								<div id="gallery" class="row grid">
									<?php 
										
										foreach ($jsonpage->items as $key => $item){
											echo('<div class="grid-item"><a data-fancybox="gallery" data-fancybox data-caption="'.$item->description.'" href="'.$item->image->url.'"><span class="image fit"><img src="'.$item->image->url.'" alt="'.$item->image->alt.'" /></span></a></div>');
										}
										
									?>
								</div>
							</div>
						</section>
					</div>
				</div>

			<!-- Footer -->
			<?php include('parts/footer.inc.php'); ?>

		</div>

		<!-- Scripts -->
		<?php include('parts/scripts.inc.php')?>
	</body>
</html>