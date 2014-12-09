<?php

	function errors_no_name() {
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Character Name - (NAME)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_cheater() {
		echo '<div class="alert alert-error"><strong>Dirty Cheater! </strong>';
		echo 'You are a clever feller, but unfortunately you cannot cheat here! Please try again elsewhere. <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_no_str() {
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Strength Stat Level - (STR)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_no_int() {
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Intelect Stat Level - (INT)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_no_con() {
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Stamina Stat Level - (STA)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_no_spe() {
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Agility Stat Level - (AGI)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

?>
