<script type="text/javascript" src="js/front-functions.min.js"></script>

<a href="/wanderlust-2/"><img src="img/logos/front-page-logo.png" alt="Wanderlust 2" class="logo"></a>

<?php
if (isset($_COOKIE['Character']) && $_COOKIE['Character'] != NULL) {
  $Character = explode("/", $_COOKIE['Character']);
  $Stats = explode("/", $_COOKIE['Stats']);
  echo '<p class="center-text">' . $Character[0] . ', ';
  if ($Stats[1] > $Stats[2] && $Stats[1] > $Stats[3] && $Stats[1] > $Stats[4]) { echo "the Brute"; }
  else if ($Stats[2] > $Stats[1] && $Stats[2] > $Stats[3] && $Stats[2] > $Stats[4]) { echo "the Mage"; }
  else if ($Stats[3] > $Stats[1] && $Stats[3] > $Stats[2] && $Stats[3] > $Stats[4]) { echo "the Tank"; }
  else if ($Stats[4] > $Stats[1] && $Stats[4] > $Stats[2] && $Stats[4] > $Stats[3]) { echo "the Rogue"; } else { echo "the Adventurer"; }
  echo " ( Level " . $Character[1] . " ) </p>";
?>
  <br />
  <a href="game.php" class="btnpop btnpop-primary startnewgame"><i class="icon-white icon-repeat"></i> Continue Adventure</a>
  <br />
  <p class="center-text">or, <a href="#startnewgame" role="button" data-toggle="modal">Start a New Adventure!</a></p>
<?php } else { ?>
  <br /><br />
  <a href="#startnewgame" role="button" data-toggle="modal" class="btnpop btnpop-succcess startnewgame"><i class="fa fa-check"></i> Start a New Adventure</a>
<?php } ?>
