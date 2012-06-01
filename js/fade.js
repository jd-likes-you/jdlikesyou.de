function fade() {
	var colors=[
		"#EAFFFF",
		"#EAFFE7",
		"#FFF1DA",
		"#FFEAFF",
		"#EDE6F5"
	];
    
    var color = colors[Math.floor(Math.random()*colors.length)]
    $("body").stop().animate({ backgroundColor: color}, 10000);
    console.log(color);
}

$(document).ready(function(){
    fade();
    window.setInterval(fade, 10000);
});
