<?php

	// Check for the Character Values
	if (!isset($_GET['name'])) {
		errors_no_name();
	} else if (!isset($_GET['str'])) {
		errors_no_str();
	} else if (!isset($_GET['int'])) {
		errors_no_int();
	} else if (!isset($_GET['sta'])) {
		errors_no_con();
	} else if (!isset($_GET['agi'])) {
		errors_no_spe();
	} else {
		// Set Default Values
		$name = htmlspecialchars($_GET['name']);
		$str = htmlspecialchars($_GET['str']);
		$int = htmlspecialchars($_GET['int']);
		$sta = htmlspecialchars($_GET['sta']);
		$agi = htmlspecialchars($_GET['agi']);

		$kills = 0;
		$steps = 0;
		$level = 1;
		$xp = 0;
		$xptonextlevel = 100;
		$date = date("m.d.y");
		$id = uniqid();

		// Check for Cheaters
		if ($str > 10 || $int > 10 || $sta > 10 || $agi > 10) {
			errors_cheater();
		} else {
			$melee_damage = round(2 + ( $str * 2 ));

			$mp_left = round(10 + ( $int * 2 ));
			$mp_full = round(10 + ( $int * 2 ));
			$magic_damage = round(2 + ( $int * 2 ));

			$hp_left = round(10 + ( $sta * 2 ));
			$hp_full = round(10 + ( $sta * 2 ));

			$dodge = round(10 + ( $agi * 2 ));
			$critical = round(10 + ( $agi * 2 ));
		}

		$valueCheck = $str + $int + $sta + $agi;
		if ($valueCheck >= 11) {
			errors_cheater();
		}

		// Save the Cookie!
		$character = $name . '/' . $level . '/' . $xp . '/' . $date . '/' . $id;
		$stats = $str . '/' . $int . '/' . $sta . '/' . $agi . '/' . $steps . '/' . $kills;
		setcookie("Character", $character);
		setcookie("Stats", $stats);
	}

?>
