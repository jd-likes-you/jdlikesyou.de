function fade() {
	var colors=[
		"#DB6954",
		"#C6C385",
		"#5D8AA8",
		"#99cccc",
		"#915C83",
		"#99cc99"
		
	];

    var color = colors[Math.floor(Math.random()*colors.length)]
    $(".colortext").stop().animate({ color: color}, 1800);
    $(".colorbackground").stop().animate({ backgroundColor: color}, 1800);
}

$(document).ready(function(){
    fade();
    window.setInterval(fade, 2800);
    $("#introtext").slabText();
});
