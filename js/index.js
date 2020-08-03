window.onload = () => {
	$("#talents").click(() => {
		var txt = '<div class="container"><div class="row">';
		$.ajax({
			url: "/php/talents.php"
		}).done((content) => {
			console.log(content);
			txt += content;
			txt += "</div></div>";
			$("#content").html(txt);
		});
	});

	$("#heroes").click(() => {
		var txt = '<div class="container"><div class="row">';
		$.ajax({
			url: "/php/heroes.php"
		}).done((content) => {
			console.log(content);
			txt += content;
			txt += "</div></div>";
			$("#content").html(txt);
		});
	});
}