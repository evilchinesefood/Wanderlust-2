<?php

	function errors_no_name() {
		$errors = 1;
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Character Name - (NAME)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_cheater() {
		$errors = 1;
		echo '<div class="alert alert-error"><strong>Dirty Cheater! </strong>';
		echo 'You are a clever feller, but unfortunately you cannot cheat here! Please try again elsewhere. <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_no_str() {
		$errors = 1;
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Strength Stat Level - (STR)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_no_int() {
		$errors = 1;
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Intelect Stat Level - (INT)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_no_con() {
		$errors = 1;
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Stamina Stat Level - (STA)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function errors_no_spe() {
		$errors = 1;
		echo '<div class="alert alert-error"><strong>Warning! </strong>';
		echo 'You Didnt Supply a Agility Stat Level - (AGI)! <a href="/wanderlust2/" class="btn btn-danger"><i class="icon-white icon-chevron-left"></i> Return Home</a>';
		echo '</div>';
		exit();
	}

	function success_newcharacter() {
		echo '<div class="alert alert-success"><strong>Success! </strong>';
		echo 'Your Character has been created and now is ready to start adventuring!';
		echo '</div>';
	}

?>
