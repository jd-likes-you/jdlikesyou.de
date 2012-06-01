function fade() {
	var colors=[
		"#E9FFFF",
		"#FFFFCC",
		"#F5E3EA",
		"#E8EDAD",
		"#CCEBCD",
		"#FAEBCD"
	];
    
    var color = colors[Math.floor(Math.random()*colors.length)]
    $("body").stop().animate({ backgroundColor: color}, 10000);
    console.log(color);
}

$(document).ready(function(){
    fade();
    window.setInterval(fade, 10000);
});
