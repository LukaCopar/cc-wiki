window.onload = () => {

	$("#title").html("Heros");

	$("#talents").click(() => {
		var txt = '<div class="container-talents">';
		$.ajax({
			url: "/php/talents.php"
		}).done((content) => {
			//console.log(content);
			txt += content;
			txt += "</div>";
			$("#content").html(txt);
			$("#title").html("Talents");
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
			$("#title").html("Heros");
		});
	});


	$(".hero-open").click(function (e) {
		e.preventDefault();
		var txt = '<div class="container">';
		//console.log($(this)[0].action);
		$.ajax({
			url: $(this)[0].action
		}).done((content) => {
			//console.log(content);
			txt += content;
			txt += "</div>";
			$("#title").html("Hero");
			$("#content").html(txt);
		});
	});
}

$(document).on("click", ".hero-open", function (e) {
	e.preventDefault();
	var txt = '<div class="container">';
	//console.log($(this)[0].action);
	$.ajax({
		url: $(this)[0].action
	}).done((content) => {
		//console.log(content);
		txt += content;
		txt += "</div>";
		$("#title").html("Hero");
		$("#content").html(txt);
	});
});

$(document).on("click", ".hehe", function (e) {
	e.preventDefault();
	//console.log($(this)[0].id);
	$.ajax({
		url: $(this)[0].href
	}).done((content) => {
		//console.log(content);
		txt = content;
		talent = "#";
		talent += $(this)[0].id;
		//console.log(talent);
		$(talent).html(txt);
	});
});