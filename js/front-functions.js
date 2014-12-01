var points = 10;
var value1 = 0;
var value2 = 0;
var value3 = 0;
var value4 = 0;

// UP
function valueup1() {
	if ( points >= 1 ) {
		value1 += 1;
		points -= 1;
		if ( value1 <= 9 ) {
			$('#value1').html('0'+value1);
		} else {
			$('#value1').html(value1);
		}
		$('#points').html(points);
		$("#1_"+value1).addClass("skill-level");
		$('#DPSCalc').html(2 + ( value1 * 2 ));
	}
};
function valueup2() {
	if ( points >= 1 ) {
		value2 += 1;
		points -= 1;
		if ( value2 <= 9 ) {
			$('#value2').html('0'+value2);
		} else {
			$('#value2').html(value2);
		}
		$('#points').html(points);
		$("#2_"+value2).addClass("skill-level");
		$('#MPCalc').html((10 + ( value2 * 2 )) + ' / ' + (10 + ( value2 * 2 )));
		$('#MDPSCalc').html(2 + ( value2 * 2 ));
	}
};
function valueup3() {
	if ( points >= 1 ) {
		value3 += 1;
		points -= 1;
		if ( value3 <= 9 ) {
			$('#value3').html('0'+value3);
		} else {
			$('#value3').html(value3);
		}
		$('#points').html(points);
		$("#3_"+value3).addClass("skill-level");
		$('#HPCalc').html((10 + ( value3 * 2 )) + ' / ' + (10 + ( value3 * 2 )));
	}
};
function valueup4() {
	if ( points >= 1 ) {
		value4 += 1;
		points -= 1;
		if ( value4 <= 9 ) {
			$('#value4').html('0'+value4);
		} else {
			$('#value4').html(value4);
		}
		$('#points').html(points);
		$("#4_"+value4).addClass("skill-level");
		$('#DCalc').html((10 + ( value4 * 2 )) + '%');
		$('#CCalc').html((10 + ( value4 * 2 )) + '%');
	}
};

// DOWN
function valuedown1() {
	if ( value1 >= 1 ) {
		value1 -= 1;
		points += 1;
		if ( value1 <= 9 ) {
			$('#value1').html('0'+value1);
		} else {
			$('#value1').html(value1);
		}
		$('#points').html(points);
		$("#1_"+(value1+1)).removeClass("skill-level");
		$('#DPSCalc').html(2 + ( value1 * 2 ));
	}
};
function valuedown2() {
	if ( value2 >= 1 ) {
		value2 -= 1;
		points += 1;
		if ( value2 <= 9 ) {
			$('#value2').html('0'+value2);
		} else {
			$('#value2').html(value2);
		}
		$('#points').html(points);
		$("#2_"+(value2+1)).removeClass("skill-level");
		$('#MPCalc').html((10 + ( value2 * 2 )) + ' / ' + (10 + ( value2 * 2 )));
		$('#MDPSCalc').html(2 + ( value2 * 2 ));
	}
};
function valuedown3() {
	if ( value3 >= 1 ) {
		value3 -= 1;
		points += 1;
		if ( value3 <= 9 ) {
			$('#value3').html('0'+value3);
		} else {
			$('#value3').html(value3);
		}
		$('#points').html(points);
		$("#3_"+(value3+1)).removeClass("skill-level");
		$("#3_"+value3).addClass("skill-level");
		$('#HPCalc').html((10 + ( value3 * 2 )) + ' / ' + (10 + ( value3 * 2 )));
	}
};
function valuedown4() {
	if ( value4 >= 1 ) {
		value4 -= 1;
		points += 1;
		if ( value4 <= 9 ) {
			$('#value4').html('0'+value4);
		} else {
			$('#value4').html(value4);
		}
		$('#points').html(points);
		$("#4_"+(value4+1)).removeClass("skill-level");
		$('#DCalc').html((10 + ( value4 * 2 )) + '%');
		$('#CCalc').html((10 + ( value4 * 2 )) + '%');
	}
};

function submitcharacter() {
	var inputname = $("#name");
  	if ( inputname.val().length > 0 ) {
    	if ( points == 0 ) { 
			var name = $("#name").val()
			window.location.href = "http://www.development.johndayers.com/wanderlust2/new-game.php?name=" + name + "&str=" + value1 + "&int=" + value2 + "&sta=" + value3 + "&agi=" + value4
		} else {
			alert('You havent used all of your talent points yet!');
		}
  	} else {
		alert('You havent named your character yet!');
	}
};

$(document).ready(function () {
	$("#STR").tooltip({
		'selector': '',
		'placement': 'bottom'
	});
	$("#INT").tooltip({
		'selector': '',
		'placement': 'bottom'
	});
	$("#STA").tooltip({
		'selector': '',
		'placement': 'bottom'
	});
	$("#AGI").tooltip({
		'selector': '',
		'placement': 'bottom'
	});
});