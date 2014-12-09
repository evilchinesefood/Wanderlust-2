<?php require_once('inc/header.inc'); ?>
<?php require_once('php/errors_functions.php'); ?>

<body>

<div id="parchment"></div>
<div id="wrapper">
	<div id="wrapper-inner">
		<p class="version"><?php require_once('inc/version.inc'); ?></p>

		<a href="/wanderlust2/"><img src="img/logos/small-logo.png" alt="Wanderlust 2" class="logo-side"></a>

        <div class="clearfix"></div><br />

        <?php require_once('php/newgame_functions.php'); ?>

        <?php
			echo '<div class="alert alert-success"><strong>Success! </strong>';
				echo 'Your Character has been created and now is ready to start adventuring!';
			echo '</div>';
		?>

        <br />

        <div class="row">
            <div class="col-md-3" style="margin-top: -3px;">
                <h2 class="ptitle" title="Your characters name"><?php echo $name;?>, <?php if ($str > $int && $str > $sta && $str > $agi) { echo "the Brute"; } else if ($int > $str && $int > $sta && $int > $agi) { echo "the Mage"; } else if ($sta > $str && $sta > $int && $sta > $agi) { echo "the Tank"; } else if ($agi > $str && $agi > $int && $agi > $sta) { echo "the Rogue"; } else { echo "the Adventurer"; } ?></h2><br />

                <p class="ptitle" title="Your characters current level">Level: <strong style="font-weight: bold"><?php echo $level;?></strong></p><br />
                <p class="ptitle" title="Your characters expereience to the next level">XP: <strong style="font-weight: bold"><?php echo $xp . ' / ' . $xptonextlevel ;?></strong></p><br />
                <p class="ptitle" title="Your characters health">HP: <strong style="font-weight: bold; color: #FF0000"><?php echo $hp_left . ' / ' . $hp_full ;?></strong></p><br />
                <p class="ptitle" title="Your characters mana">MP: <strong style="font-weight: bold; color: #0000FF"><?php echo $mp_left . ' / ' . $mp_full ;?></strong></p><br />
                <p class="ptitle" title="Your characters damage">Melee Damage: <strong style="font-weight: bold"><?php echo $melee_damage ;?></strong></p><br />
                <p class="ptitle" title="Your characters magic damage">Magic Damage: <strong style="font-weight: bold"><?php echo $magic_damage ;?></strong></p><br />
                <p class="ptitle" title="Your characters damage">Dodge Chance: <strong style="font-weight: bold"><?php echo $dodge ;?>%</strong></p><br />
                <p class="ptitle" title="Your characters magic damage">Critical Chance: <strong style="font-weight: bold"><?php echo $critical ;?>%</strong></p><br /><br />

                <p class="ptitle" title="How many moves your character has taken">Steps: <strong style="font-weight: bold"><?php echo $steps;?></strong></p><br />
                <p class="ptitle" title="How many monsters you have killed">Kills: <strong style="font-weight: bold"><?php echo $kills;?></strong></p><br />
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-1">
                        <span id="STR" title="Strength (Melee Damage)"><strong>STR</strong></span>
                        <div class="skill-background">
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
                        <div class="skill-star2">
                        	<span id="value1" style="font-weight: bold;"><?php if ( $str <= 9 ) { echo '0' . $str; } else { echo $str; }?></span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <span id="INT" title="Intelect (Magic Damage)">INT</span>
                        <div class="skill-background">
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
                        <div class="skill-star2">
                        	<span id="value2" style="font-weight: bold;"><?php if ( $int <= 9 ) { echo '0' . $int; } else { echo $int; }?></span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <span id="STA" title="Stamina (Health & Health Regen)">STA</span>
                        <div class="skill-background">
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
                        <div class="skill-star2">
                        	<span id="value3" style="font-weight: bold;"><?php if ( $sta <= 9 ) { echo '0' . $sta; } else { echo $sta; }?></span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <span id="AGI" title="Agility (Number of Moves per turn)">AGI</span>
                        <div class="skill-background">
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
                        <div class="skill-star2">
                        	<span id="value4" style="font-weight: bold;"><?php if ( $agi <= 9 ) { echo '0' . $agi; } else { echo $agi; }?></span>
                        </div>
                    </div>
                </div>

                <br /><br />

            </div>
        </div>

        <div class="row">
        	<div class="col-md-12 pagination-centered" style="margin-top:-20px;">
            	<a href="game.php" class="btn btn-success btn-lg"><i class="fa fa-heart"></i> Start Adventure</a>
            </div>
        </div>

	</div>
</div>

<script>

	var str = <?php echo $str;?>;
	var int = <?php echo $int;?>;
	var sta = <?php echo $sta;?>;
	var agi = <?php echo $agi;?>;

	while (str >= 1) {
		$("#1_"+str).addClass("skill-level");
		str -= 1;
	}
	while (int >= 1) {
		$("#2_"+int).addClass("skill-level");
		int -= 1;
	}
	while (sta >= 1) {
		$("#3_"+sta).addClass("skill-level");
		sta -= 1;
	}
	while (agi >= 1){
		$("#4_"+agi).addClass("skill-level");
		agi -= 1;
	}

	$(document).ready(function () {
		$("#STR").tooltip({
			'selector': '',
			'placement': 'top'
		});
		$("#INT").tooltip({
			'selector': '',
			'placement': 'top'
		});
		$("#STA").tooltip({
			'selector': '',
			'placement': 'top'
		});
		$("#AGI").tooltip({
			'selector': '',
			'placement': 'top'
		});
		$(".ptitle").tooltip({
			'selector': '',
			'placement': 'top'
		});
	});

</script>

<?php require_once('inc/footer.inc'); ?>

<script type="text/javascript" src="js/sparks.js"></script>

</body>
</html>
