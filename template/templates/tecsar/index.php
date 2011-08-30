<!DOCTYPE html>
<?php
JHtml::_('behavior.framework', true);

$menu = JSite::getMenu();
if ($menu && $menu->getActive())
    $menu = $menu->getActive()->alias;
else
	$menu = "";

?>
<html lang="en">
<head>
	<jdoc:include type="head" />
	
	
	<link rel="stylesheet" href="/templates/tecsar/css/template.css" />
	<script src="/templates/tecsar/scripts/scripts.js"></script>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-25411681-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>

<body class="<?php echo $menu ?>">
	
	
	<div id="wrapper"><div class="container" class="clearfix">
		<?php if ($this->countModules('header')): ?>
		<div id="mainheader">
			<jdoc:include type="modules" name="header" style="xhtml" />
		</div>
		<?php endif;?>
		
		<? if ($menu !== 'home'): ?>
		<div id="body">
			<?php if ($this->countModules('title')): ?>
			<div id="title">
				<jdoc:include type="modules" name="title" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<?php if ($this->countModules('sidebar')): ?>
			<div id="sidebar">
				<jdoc:include type="modules" name="sidebar" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<div id="component">
				<jdoc:include type="component" />
			</div>
			
			<div class="clr"></div>
		</div>
		<? endif; ?>
		
		<?php if ($this->countModules('bottom')): ?>
		<div id="bottom" class="columns">
			<jdoc:include type="modules" name="bottom" style="rounded" />
			
			<div class="clr"></div>
		</div>
		<?php endif; ?>
		
		<div id="mainfooter">
			<jdoc:include type="modules" name="footer" style="xhtml" />
		</div>
	</div></div>
	
	<div id="copyright"><div class="container">
		<div class="right">Site by <a href="http://ccistudios.com" target="_blank">CCI Studios</a></div>
		<div class="left">&copy; <?php echo date('Y') ?> TECSAR ENGINEERING. All Rights Reserved.</div>
		
		<div class="clr"></div>
	</div></div>
	
</body>
</html>