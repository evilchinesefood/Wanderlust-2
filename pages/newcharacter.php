<?php require_once('../php/newgame_functions.php'); ?>
<?php require_once('../php/errors_functions.php'); ?>

<?php
  success_newcharacter();
?>

<div class="row">
  <div class="col-xs-5" style="margin-top: -3px;">
    <h2 title="Your characters name"><?php echo $name;?>, <?php if ($str > $int && $str > $sta && $str > $agi) { echo "the Brute"; } else if ($int > $str && $int > $sta && $int > $agi) { echo "the Mage"; } else if ($sta > $str && $sta > $int && $sta > $agi) { echo "the Tank"; } else if ($agi > $str && $agi > $int && $agi > $sta) { echo "the Rogue"; } else { echo "the Adventurer"; } ?></h2>

    <p class="ptitle" title="Your characters current level">Level: <strong style="font-weight: bold"><?php echo $level;?></strong></p>
    <p class="ptitle" title="Your characters expereience to the next level">XP: <strong style="font-weight: bold"><?php echo $xp . ' / ' . $xptonextlevel ;?></strong></p><br />
    <p class="ptitle" title="Your characters health">HP: <strong style="font-weight: bold; color: #FF0000"><?php echo $hp_left . ' / ' . $hp_full ;?></strong></p>
    <p class="ptitle" title="Your characters mana">MP: <strong style="font-weight: bold; color: #0000FF"><?php echo $mp_left . ' / ' . $mp_full ;?></strong></p>
    <p class="ptitle" title="Your characters damage">Melee Damage: <strong style="font-weight: bold"><?php echo $melee_damage ;?></strong></p>
    <p class="ptitle" title="Your characters magic damage">Magic Damage: <strong style="font-weight: bold"><?php echo $magic_damage ;?></strong></p>
    <p class="ptitle" title="Your characters damage">Dodge Chance: <strong style="font-weight: bold"><?php echo $dodge ;?>%</strong></p>
    <p class="ptitle" title="Your characters magic damage">Critical Chance: <strong style="font-weight: bold"><?php echo $critical ;?>%</strong></p>

    <p class="ptitle" title="How many moves your character has taken">Steps: <strong style="font-weight: bold"><?php echo $steps;?></strong></p>
    <p class="ptitle" title="How many monsters you have killed">Kills: <strong style="font-weight: bold"><?php echo $kills;?></strong></p>
  </div>
  <div class="col-xs-7">
    <div class="row">
      <div class="col-sm-2 col-xs-2 col-table-spacing">
        <span id="STR" title="Strength (Melee Damage)"><strong>STR</strong></span>
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
        <div class="skill-star">
          <span id="value1">00</span>
        </div>
      </div>
      <div class="col-sm-2 col-xs-2 col-table-spacing">
        <span id="INT" title="Intelect (Magic Damage)"><strong>INT</strong></span>
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
        <div class="skill-star">
          <span id="value2">00</span>
        </div>
      </div>
      <div class="col-sm-2 col-xs-2 col-table-spacing">
        <span id="STA" title="Stamina (Health & Health Regen)"><strong>STA</strong></span>
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
        <div class="skill-star">
          <span id="value3">00</span>
        </div>
      </div>
      <div class="col-sm-2 col-xs-2 col-table-spacing">
        <span id="AGI" title="Agility (Dodge &amp; Crit Chance)"><strong>AGI</strong></span>
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
        <div class="skill-star">
          <span id="value4">00</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="pull-right">
    <a href="game.php" class="btnpop btnpop-succcess"><i class="fa fa-heart"></i> Start Adventure</a>
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
