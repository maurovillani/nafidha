<header id="header">
	<h1 id="logo"><a href="index.php">Nafidha</a></h1>
	<nav id="nav">
		<ul>
			<!--  li><a href="index.php">Home</a></li-->
			<li<?php if($page == 'casa') echo(' class="active"'); ?>><a href="nafidha-la-casa.php<?php if(isset($_GET['lang'])) echo('?lang='.$_GET['lang']); ?>"><?php echo(MENULACASA); ?></a></li>
			<li<?php if($page == 'davisitare') echo(' class="active"'); ?>><a href="nafidha-da-visitare.php<?php if(isset($_GET['lang'])) echo('?lang='.$_GET['lang']); ?>"><?php echo(MENUDAVISITARE); ?></a></li>
			<!-- li><a href="nafidha-dettagli.php">Dettagli</a></li-->
			<li<?php if($page == 'contatti') echo(' class="active"'); ?>><a href="nafidha-contatti.php<?php if(isset($_GET['lang'])) echo('?lang='.$_GET['lang']); ?>" class="button special"><?php echo(MENUCONTATTI); ?></a></li>
			<li><div class="select-wrapper"><select <?php if($lang=="it") echo('selected="selected " '); ?>name="language" id="language"><option value="it">Italiano</option><option <?php if($lang=="en") echo('selected="selected " '); ?>value="en">English</option></select></div></li>
		</ul>
	</nav>
</header>