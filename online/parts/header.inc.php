<header id="header">
	<h1 id="logo"><a href="<?php if (isset($rootWebPath)) echo $rootWebPath; ?>home<?php if(isset($_GET['lang'])) echo('?lang='.$_GET['lang']); ?>">Nafidha</a></h1>
	<nav id="nav">
		<ul>
			<!--  li><a href="index.php">Home</a></li-->
			<li<?php if($page == 'casa') echo(' class="active"'); ?>><a href="<?php if (isset($rootWebPath)) echo $rootWebPath; ?>nafidha-la-casa<?php if(isset($_GET['lang'])) echo('?lang='.$_GET['lang']); ?>"><?php echo(MENULACASA); ?></a></li>
			<li<?php if($page == 'davisitare') echo(' class="active"'); ?>><a href="<?php if (isset($rootWebPath)) echo $rootWebPath; ?>nafidha-da-visitare<?php if(isset($_GET['lang'])) echo('?lang='.$_GET['lang']); ?>"><?php echo(MENUDAVISITARE); ?></a></li>
			<li<?php if($page == 'blog') echo(' class="active"'); ?>><a href="<?php if (isset($rootWebPath)) echo $rootWebPath; ?>blog<?php if(isset($_GET['lang'])) echo('?lang='.$_GET['lang']); ?>"><?php echo(MENUBLOG); ?></a></li>
			<li<?php if($page == 'booking') echo(' class="active"'); ?>><a href="<?php if (isset($rootWebPath)) echo $rootWebPath; ?>booking<?php if(isset($_GET['lang'])) echo('?lang='.$_GET['lang']); ?>"><?php echo(MENUBOOKING); ?></a></li>									
			<!-- li><a href="nafidha-dettagli.php">Dettagli</a></li-->
			<li<?php if($page == 'contatti') echo(' class="active"'); ?>><a href="<?php if (isset($rootWebPath)) echo $rootWebPath; ?>nafidha-contatti<?php if(isset($_GET['lang'])) echo('?lang='.$_GET['lang']); ?>" class="button special"><?php echo(MENUCONTATTI); ?></a></li>
			<li><div class="select-wrapper"><select name="language" id="language"><option <?php if($lang=="it") echo('selected="selected" '); ?> value="it">Italiano</option><option <?php if($lang=="en") echo('selected="selected " '); ?>value="en">English</option></select></div></li>
		</ul>
	</nav>
</header>