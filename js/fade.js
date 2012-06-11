function fade() {
	var colors=[
		"#DB6954",
		"#C6C385",
		"#5D8AA8",
		"#A3E3DB",
		"#915C83"
	];

    var color = colors[Math.floor(Math.random()*colors.length)]
    $(".colortext").stop().animate({ color: color}, 3000);
    console.log(color);
}

$(document).ready(function(){
    fade();
    window.setInterval(fade, 3000);
});
