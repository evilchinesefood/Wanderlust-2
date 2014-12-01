<?php require_once('inc/header.inc'); ?>
<?php require_once('php/inc_errors.php'); ?>

<body>

<div id="parchment"></div>
<div id="border"></div>
<div id="wrapper">
	<div id="wrapper-inner">
		<p class="version"><?php require_once('inc/version.inc'); ?></p>    
    
		<a href="http://www.development.johndayers.com/wanderlust2/"><img src="http://www.development.johndayers.com/wanderlust2/img/logos/small-logo.png" alt="Wanderlust 2" class="logo-side"></a>
        <div id="map">
        	<?php require_once('php/inc_map.php'); ?>
        </div>
        
	</div>
</div>

<?php require_once('inc/footer.inc'); ?>

</body>
</html>