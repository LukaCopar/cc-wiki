window.onload = () => {
	$("#talents").click(() => {
		var txt = '<div class="container-talents">';
		$.ajax({
			url: "/php/talents.php"
		}).done((content) => {
			//console.log(content);
			txt += content;
			txt += "</div>";
			$("#content").html(txt);
		});
	});

	$("#heroes").click(() => {
		var txt = '<div class="container-heros">';
		$.ajax({
			url: "/php/heroes.php"
		}).done((content) => {
			//console.log(content);
			txt += content;
			txt += "</div>";
			$("#content").html(txt);
		});
	});


	$(".hero-open").click(function (e) {
		var txt = '<div class="container">';
		console.log($(this)[0].value);
		$.ajax({
			url: $(this)[0].value
		}).done((content) => {
			//console.log(content);
			txt += content;
			txt += "</div>";
			$("#content").html(txt);
		});
	});
}