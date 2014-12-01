<?php require_once('inc/header.inc'); ?>

<script type="text/javascript" src="http://www.development.johndayers.com/wanderlust2/js/front-functions.js"></script>

<body>

<div id="parchment"></div>
<div id="wrapper">
	<div id="wrapper-inner">
		<p class="version"><?php require_once('inc/version.inc'); ?></p>    
    
		<a href="#"><img src="http://www.development.johndayers.com/wanderlust2/img/logos/front-page-logo.png" alt="Wanderlust 2" class="logo"></a>
        
        <div class="nav">
        <?php if ($_COOKIE['Character'] != NULL) { ?>
        	<?php 
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
			<a href="http://www.development.johndayers.com/wanderlust2/game.php" class="btn btn-warning btn-large"><i class="icon-white icon-repeat"></i> Continue Adventure</a></div>
            <p style="text-align: center;">or, <a href="#start" role="button" data-toggle="modal">Start a New Adventure!</a></p>
        <?php } else { ?>
        	<br /><br />
        	<a href="#start" role="button" data-toggle="modal" class="btn btn-success btn-large"><i class="icon-white icon-ok"></i> Start a New Adventure</a>
        <?php } ?>
        </div>
        
	</div>
</div>
 
<!-- Start Modal -->
<div id="start" class="modal hide fade" style="width: 516px; height: 552px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
		<h3 id="myModalLabel"><strong>Start a New Adventure!</strong></h3>
	</div>
    
	<div class="modal-body">
		<div class="row">
			<div class="span2">
                <label>Name</label>
                <input id="name" name="name" type="text" class="span2" placeholder="Adventurer's Name">
                <span style="font-weight: bold;">Choose your talents:</span><br /><br />
                <span style="font-weight: bold;">STR</span> <span style="font-size:12px;">(+Melee Damage)</span><br />
                <span style="font-weight: bold;">INT</span> <span style="font-size:12px;">(+Mana &amp; Damage)</span><br />
                <span style="font-weight: bold;">STA</span> <span style="font-size:12px;">(+Health)</span><br />
                <span style="font-weight: bold;">AGI</span> <span style="font-size:12px;">(+Dodge &amp; Crit)</span><br /><br />
                <span>Talent Points: <span id="points" style="font-weight: bold;">10</span></span><br />
			</div>
		<div class="span4">
			<div class="row">
				<div class="span1">
                	<span id="STR" title="Strength (Melee Damage)" style="margin-left: 17px;"><strong>STR</strong></span>
                	<a onClick="valueup1()" class="btn" style="margin-left: 12px; margin-bottom: -15px;"><i class="icon-plus"></i></a><br />
                    <div class="well">
                    	<table width="20" border="0" cellspacing="0" cellpadding="0">
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
                    <a onClick="valuedown1()" class="btn" style="margin-top: -58px; margin-left: 12px;"><i class="icon-minus"></i></a><br />
                    <div class="skill-star1">
                    	<span id="value1">00</span>
                    </div>
                </div>
                <div class="span1">
                	<span id="INT" title="Intelect (Magic Damage)" style="margin-left: 17px;">INT</span>
                	<a onClick="valueup2()" class="btn" style="margin-left: 12px; margin-bottom: -15px;"><i class="icon-plus"></i></a><br />
                    <div class="well">
                    	<table width="20" border="0" cellspacing="0" cellpadding="0">
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
                    <a onClick="valuedown2()" class="btn" style="margin-top: -58px; margin-left: 12px;"><i class="icon-minus"></i></a><br />
                    <div class="skill-star1">
                    	<span id="value2">00</span>
                    </div>
                </div>
                <div class="span1">
                	<span id="STA" title="Stamina (Health & Health Regen)" style="margin-left: 16px;">STA</span>
                	<a onClick="valueup3()" class="btn" style="margin-left: 12px; margin-bottom: -15px;"><i class="icon-plus"></i></a><br />
                    <div class="well">
                    	<table width="20" border="0" cellspacing="0" cellpadding="0">
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
                    <a onClick="valuedown3()" class="btn" style="margin-top: -58px; margin-left: 12px;"><i class="icon-minus"></i></a><br />
                    <div class="skill-star1">
                    	<span id="value3">00</span>
                    </div>
                </div>
                <div class="span1">
                	<span id="AGI" title="Agility (Dodge &amp; Crit Chance)" style="margin-left: 16px;">AGI</span>
                	<a onClick="valueup4()" class="btn" style="margin-left: 12px; margin-bottom: -15px;"><i class="icon-plus"></i></a><br />
                    <div class="well">
                    	<table width="20" border="0" cellspacing="0" cellpadding="0">
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
                    <a onClick="valuedown4()" class="btn" style="margin-top: -58px; margin-left: 12px;"><i class="icon-minus"></i></a><br />
                    <div class="skill-star1">
                    	<span id="value4">00</span>
                    </div>
                </div>
            </div>
		</div>
	</div>
    
    <div class="row statsBar">
		<div class="span2">
        	<p class="ptitle" title="Your characters health">HP: <strong style="font-weight: bold; color: #FF0000" id="HPCalc">10 / 10</strong></p><br />
            <p class="ptitle" title="Your characters mana">MP: <strong style="font-weight: bold; color: #0000FF" id="MPCalc">10 / 10</strong></p><br />
        </div>
        <div class="span2" style="margin-left: -23px; margin-right: 20px;">
        	<p class="ptitle" title="Your characters damage">Melee Damage: <strong style="font-weight: bold" id="DPSCalc">2</strong></p><br />
            <p class="ptitle" title="Your characters magic damage">Magic Damage: <strong style="font-weight: bold" id="MDPSCalc">2</strong></p><br />
        </div>
        <div class="span2">
        	<p class="ptitle" title="Your characters damage">Dodge: <strong style="font-weight: bold" id="DCalc">10%</strong></p><br />
            <p class="ptitle" title="Your characters magic damage">Critical: <strong style="font-weight: bold" id="CCalc">10%</strong></p><br />
        </div>
	</div>
  </div>
  
  <div class="modal-footer">
	<button class="btn" data-dismiss="modal" aria-hidden="true" style=" font-family: 'GraphicPixel';">Close</button>
    <button onClick="submitcharacter()" class="btn btn-success" style=" font-family: 'GraphicPixel';">Create Character</button>
  </div>
</div>

<?php require_once('inc/footer.inc'); ?>

<script type="text/javascript" src="http://www.development.johndayers.com/wanderlust2/js/sparks.js"></script>

</body>
</html>