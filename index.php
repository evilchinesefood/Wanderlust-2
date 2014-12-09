<?php require_once('inc/header.inc'); ?>

<script type="text/javascript" src="js/front-functions.min.js"></script>

<body>

<div id="parchment"></div>
<div id="wrapper">
	<div id="wrapper-inner">
		<p class="version"><?php require_once('inc/version.inc'); ?></p>
		<a href="/wanderlust2/"><img src="img/logos/front-page-logo.png" alt="Wanderlust 2" class="logo"></a>
    <div class="nav">
    <?php
			if ($_COOKIE['Character'] != NULL) {
				$Character = explode("/", $_COOKIE['Character']);
				$Stats = explode("/", $_COOKIE['Stats']);
				echo $Character[0] . ', ';
				if ($Stats[1] > $Stats[2] && $Stats[1] > $Stats[3] && $Stats[1] > $Stats[4]) { echo "the Brute"; }
				else if ($Stats[2] > $Stats[1] && $Stats[2] > $Stats[3] && $Stats[2] > $Stats[4]) { echo "the Mage"; }
				else if ($Stats[3] > $Stats[1] && $Stats[3] > $Stats[2] && $Stats[3] > $Stats[4]) { echo "the Tank"; }
				else if ($Stats[4] > $Stats[1] && $Stats[4] > $Stats[2] && $Stats[4] > $Stats[3]) { echo "the Rogue"; } else { echo "the Adventurer"; }
				echo " ( Level " . $Character[1] . " )";
		?>
    	<br /><br />
			<a href="game.php" class="btn btn-warning btn-large"><i class="icon-white icon-repeat"></i> Continue Adventure</a></div>
    	<p style="text-align: center;">or, <a href="#start" role="button" data-toggle="modal">Start a New Adventure!</a></p>
    <?php } else { ?>
    	<br /><br />
    	<a href="#start" role="button" data-toggle="modal" id="btn-start" class="btnpop btnpop-succcess"><i class="fa fa-check"></i> Start a New Adventure</a>
    <?php } ?>
    </div>
	</div>
</div>

<!-- Start Modal -->
<div id="start" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-times"></i></span><span class="sr-only">Close</span></button>
				<h4 class="modal-title"><strong>Start a New Adventure!</strong></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-5">
						<label>Character's Name:</label>
						<input id="name" name="name" type="text" class="col-xs-12 form-control" placeholder="Adventurer's Name"><br />
						<span style="font-weight: bold;">Choose your talents:</span><br />
						<span style="font-weight: bold;">STR</span> <span style="font-size:12px;">(+Melee Damage)</span><br />
						<span style="font-weight: bold;">INT</span> <span style="font-size:12px;">(+Mana &amp; Damage)</span><br />
						<span style="font-weight: bold;">STA</span> <span style="font-size:12px;">(+Health)</span><br />
						<span style="font-weight: bold;">AGI</span> <span style="font-size:12px;">(+Dodge &amp; Crit)</span><br /><br />
						<span>Talent Points: <span id="points" style="font-weight: bold;">10</span></span><br />
					</div>
					<div class="col-sm-7">
						<div class="row modal-spacing">
							<div class="col-sm-2 col-xs-3" style="padding-left: 30px;">
								<span id="STR" title="Strength (Melee Damage)"><strong>STR</strong></span>
								<a onClick="valueup1()" class="btn btn-primary btn-up"><i class="fa fa-plus"></i></a><br />
								<div class="well">
									<table class="skill-table" width="20" border="0" cellspacing="0" cellpadding="0">
										<tr id="1_10"><td>&nbsp;</td></tr>
										<tr id="1_9"><td>&nbsp;</td></tr>
										<tr id="1_8"><td>&nbsp;</td></tr>
										<tr id="1_7"><td>&nbsp;</td></tr>
										<tr id="1_6"><td>&nbsp;</td></tr>
										<tr id="1_5"><td>&nbsp;</td></tr>
										<tr id="1_4"><td>&nbsp;</td></tr>
										<tr id="1_3"><td>&nbsp;</td></tr>
										<tr id="1_2"><td>&nbsp;</td></tr>
										<tr id="1_1"><td>&nbsp;</td></tr>
									</table>
								</div>
								<a onClick="valuedown1()" class="btn btn-primary btn-down"><i class="fa fa-minus"></i></a><br />
								<div class="skill-star">
									<span id="value1">00</span>
								</div>
							</div>
							<div class="col-sm-2 col-xs-3" style="padding-left: 30px;">
								<span id="INT" title="Intelect (Magic Damage)"><strong>INT</strong></span>
								<a onClick="valueup2()" class="btn btn-primary btn-up"><i class="fa fa-plus"></i></a><br />
								<div class="well">
									<table class="skill-table" width="20" border="0" cellspacing="0" cellpadding="0">
										<tr id="2_10"><td>&nbsp;</td></tr>
										<tr id="2_9"><td>&nbsp;</td></tr>
										<tr id="2_8"><td>&nbsp;</td></tr>
										<tr id="2_7"><td>&nbsp;</td></tr>
										<tr id="2_6"><td>&nbsp;</td></tr>
										<tr id="2_5"><td>&nbsp;</td></tr>
										<tr id="2_4"><td>&nbsp;</td></tr>
										<tr id="2_3"><td>&nbsp;</td></tr>
										<tr id="2_2"><td>&nbsp;</td></tr>
										<tr id="2_1"><td>&nbsp;</td></tr>
									</table>
								</div>
								<a onClick="valuedown2()" class="btn btn-primary btn-down"><i class="fa fa-minus"></i></a><br />
								<div class="skill-star">
									<span id="value2">00</span>
								</div>
							</div>
							<div class="col-sm-2 col-xs-3" style="padding-left: 30px;">
								<span id="STA" title="Stamina (Health & Health Regen)"><strong>STA</strong></span>
								<a onClick="valueup3()" class="btn btn-primary btn-up" ><i class="fa fa-plus"></i></a><br />
								<div class="well">
									<table class="skill-table" width="20" border="0" cellspacing="0" cellpadding="0">
										<tr id="3_10"><td>&nbsp;</td></tr>
										<tr id="3_9"><td>&nbsp;</td></tr>
										<tr id="3_8"><td>&nbsp;</td></tr>
										<tr id="3_7"><td>&nbsp;</td></tr>
										<tr id="3_6"><td>&nbsp;</td></tr>
										<tr id="3_5"><td>&nbsp;</td></tr>
										<tr id="3_4"><td>&nbsp;</td></tr>
										<tr id="3_3"><td>&nbsp;</td></tr>
										<tr id="3_2"><td>&nbsp;</td></tr>
										<tr id="3_1"><td>&nbsp;</td></tr>
									</table>
								</div>
								<a onClick="valuedown3()" class="btn btn-primary btn-down"><i class="fa fa-minus"></i></a><br />
								<div class="skill-star">
									<span id="value3">00</span>
								</div>
							</div>
							<div class="col-sm-2 col-xs-3" style="padding-left: 30px;">
								<span id="AGI" title="Agility (Dodge &amp; Crit Chance)"><strong>AGI</strong></span>
								<a onClick="valueup4()" class="btn btn-primary btn-up"><i class="fa fa-plus"></i></a><br />
								<div class="well">
									<table class="skill-table" width="20" border="0" cellspacing="0" cellpadding="0">
										<tr id="4_10"><td>&nbsp;</td></tr>
										<tr id="4_9"><td>&nbsp;</td></tr>
										<tr id="4_8"><td>&nbsp;</td></tr>
										<tr id="4_7"><td>&nbsp;</td></tr>
										<tr id="4_6"><td>&nbsp;</td></tr>
										<tr id="4_5"><td>&nbsp;</td></tr>
										<tr id="4_4"><td>&nbsp;</td></tr>
										<tr id="4_3"><td>&nbsp;</td></tr>
										<tr id="4_2"><td>&nbsp;</td></tr>
										<tr id="4_1"><td>&nbsp;</td></tr>
									</table>
								</div>
								<a onClick="valuedown4()" class="btn btn-primary btn-down"><i class="fa fa-minus"></i></a><br />
								<div class="skill-star">
									<span id="value4">00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button onClick="submitcharacter()" class="btn btn-success">Create Character</button>
			</div>
		</div>
	</div>
</div>

<?php require_once('inc/footer.inc'); ?>

<script type="text/javascript" src="js/sparks.js"></script>

</body>
</html>
