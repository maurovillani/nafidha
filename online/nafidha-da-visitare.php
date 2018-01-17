<?php 
$page = "davisitare";
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
						
						<form>
							<div class="row uniform 50%">
								<div class="4u 12u$(xsmall)">
									<label for="selecttype"><?php echo(LBLTIPOSCOPRI); ?></label>
									<select id="selecttype" name="selecttype" placeholder="tipo">
										<option value="*"><?php echo(LBLALL); ?></option>
										<option value="NATURE"><?php echo(LBLNATURE); ?></option>
										<option value="SEA"><?php echo(LBLSEA); ?></option>
										<option value="MONUMENTS"><?php echo(LBLMONUMENTS); ?></option>
										<option value="SHOPPING"><?php echo(LBLSHOPPING); ?></option>
										<option value="CULT"><?php echo(LBLCULT); ?></option>
									</select>
								</div>
								<div class="4u 12u$(xsmall)">
									<label for="selecttype"><?php echo(LBLTRANSSCOPRI); ?></label>
									<select id="selecttransport" name="selecttransport" placeholder="trasporto">
										<option value="*"><?php echo(LBLNVR); ?></option>
										<option value="WALKING"><?php echo(LBLWALK); ?></option>
										<option value="BIKE"><?php echo(LBLBIKE); ?></option>
										<option value="CAR"><?php echo(LBLCAR); ?></option>
									</select>
								</div>
								<div class="4u 12u$(xsmall)">
									<label>&nbsp;</label>
									<a href="nafidha-da-visitare.php" class="button"><?php echo(BTNITINERARI); ?></a>
								</div>
							</div>
						</form>

						<!-- Image -->
							<section>
								<div class="box alt">
									<div class="row 50% uniform gridplaces">
										<?php 
										
										foreach ($jsonpage->items as $key => $item){
											$cosatroverai = "";
											foreach ($item->tags as $innerKey => $tag) {
												$cosatroverai .= $tag->name;
												if($innerKey != count($item->tags) - 1) {
													$cosatroverai .= " ";
												}
											}
											$by = $item->by;
											if($item->by == "BIKE") $by .= " WALKING";
											if($item->by == "CAR") $by .= " BIKE WALKING";
											echo('<div class="grid-item '.$item->by.' '.$cosatroverai.'"><a href="nafidha-da-visitare-dettagli.php?lang='.$lang.'&amp;code='.$item->code.'&amp;key='.$key.'"><span class="image fit"><img src="'.$item->images->main->url.'" alt="'.$item->images->main->alt.'" /><h4 class="titleimage">'.$item->name.'</h4></span></a></div>');
										}
										
										?>
									</div>
								</div>
								
							</section>
							<section class="special">
								<ul class="actions">
									<li><a target="_new" href="media/scoprire_dintorni_completo_<?php echo($lang); ?>.pdf" class="button"><?php echo(BTNITINERARI); ?></a></li>
								</ul>
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