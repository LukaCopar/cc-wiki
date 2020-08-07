$(document).ready(() => {

	$("#title").html("Heros");

	$("#talents").click(function (e) {
		var txt = '<div class="container-talents">';
		$.ajax({
			url: "/php/talents.php"
		}).done((content) => {
			txt += content;
			txt += "</div>";
			$("#content").html(txt);
			$("#title").html("Talents");
		});
	});

	$("#heroes").click(function () {
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

	$(".nav-item").click(function (e) {
		//console.log(e.target.parentNode);
		//console.log();
		if ($("#navbar").hasClass("animate") && $(e.target.parentNode).hasClass("active")) {
			$("#navbar").removeClass("animate");
			var lis = $("#navbar").find('li');
			$(lis).each(function (e) {
				$($(lis)[e]).removeClass("active");
			});
			$("#navbar").animate({
				height: window.innerHeight * 0.09
			});
		}
		else if (!$("navbar").hasClass("animate")) {
			var lis = $("#navbar").find('li');
			$(lis).each(function (e) {
				$($(lis)[e]).removeClass("active");
			});
			$("#navbar").addClass('animate');
			//$("#navbar").addClass('animate');
			$("#navbar").animate({
				height: window.innerHeight
			});
			$(e.target.parentNode).addClass("active");
		}

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

});

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

$(document).on("scroll", ".talent", function (e) {
	console.log(123);
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
		$(talent).html(txt);
	});
});

