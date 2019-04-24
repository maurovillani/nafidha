<?php 
$page = "davisitare";
include "controllers/common.inc.php";

$code = null;
if(isset($_GET['code'])) $code = $_GET['code'];
$key = null;
if(isset($_GET['key'])) $key = $_GET['key'];

$item = null;
if($key != null) {
	$jsonstring = file_get_contents("data/davisitare_".$lang.".json");
	$jsondata = json_decode($jsonstring);
	$item = $jsondata->items[$key];
}

if(!$item) header("Location: nafidha-da-visitare.php");

$cosatroverai = "";
foreach ($item->tags as $key => $tag) {
	$cosatroverai .= constant($tag->name);
	if($key != count($item->tags) - 1) {
		$cosatroverai .= ", ";
	}
}

$siti = "";
if(isset($item->urls)) {
	foreach ($item->urls as $key => $url) {
		$siti .= '<a target ="_blank" href="'.$url->url.'">'.$url->url.'</a> ('.$url->name.')';
		if($key != count($item->urls) - 1) {
			$siti .= ", ";
		}
	}
}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Nafidha - Da visitare</title>
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
						<h2><?php if($jsonpage) echo($jsonpage->header); ?> - <?php echo($item->name); ?></h2>
					</header>

					<h4><?php if($jsonpage) echo($jsonpage->lbldettagli); ?></h4>
					<section>
						<p><a data-fancybox="gallery" data-caption="<?php if($lang == 'it') echo($item->images->main->alt); ?>" href="<?php echo($item->images->main->url); ?>"><span class="image left"><img src="<?php echo($item->images->main->url); ?>" alt="<?php echo($item->images->main->alt); ?>" /></span></a><?php echo($item->description); ?></p>
					</section>
					<section>
						<div class="box alt">
							<div id="galleryp" class="row 50% uniform">
								<?php 
								
								foreach ($item->images->gallery as $key => $inneritem) {
									if($lang == 'it')
										echo('<div class="3u 4u(xsmall)"><a data-fancybox="gallery" data-caption="'.$inneritem->alt.'" href="'.$inneritem->url.'"><span class="image fit"><img src="'.$inneritem->url.'" alt="'.$inneritem->alt.'" /></span></a></div>');
									else 
										echo('<div class="3u 4u(xsmall)"><a data-fancybox="gallery" data-caption="" href="'.$inneritem->url.'"><span class="image fit"><img src="'.$inneritem->url.'" alt="'.$inneritem->alt.'" /></span></a></div>');
								}
								
								?>
							</div>
						</div>
					</section>
					
					<section>
							<div class="map" style="width: 100%">
								<iframe style="width: 100%" src="<?php echo($item->googlemapembed); ?>" allowfullscreen=""></iframe>
							</div>
					</section>
					<section>
						
						<div class="table-wrapper">
							<table>
								<tbody>
									<tr>
										<td><?php if($jsonpage) echo($jsonpage->lblcosatroverai); ?></td>
										<td><?php echo($cosatroverai); ?></td>
									</tr>
									<tr>
										<td><?php if($jsonpage) echo($jsonpage->lblcomearrivare); ?></td>
										<td><?php echo(constant($item->by)); ?></td>
									</tr>
									<tr>
										<td><?php if($jsonpage) echo($jsonpage->lbldistanza); ?></td>
										<td><?php echo($item->distancekm); ?></td>
									</tr>
									<tr>
										<td><?php if($jsonpage) echo($jsonpage->lbllink); ?></td>
										<td><?php echo($siti); ?></td>
									</tr>
								</tbody>
							</table>
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