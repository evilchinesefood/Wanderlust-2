<?php require_once('inc/header.inc'); ?>
<?php require_once('php/errors_functions.php'); ?>

<body>

<div id="parchment"></div>
<div id="border"></div>
<div id="wrapper">
	<div id="wrapper-inner">
		<p class="version"><?php require_once('inc/version.inc'); ?></p>
        <div id="map">
        	<?php require_once('php/map_functions.php'); ?>
        </div>

	</div>
</div>

<?php require_once('inc/footer.inc'); ?>

</body>
</html>
