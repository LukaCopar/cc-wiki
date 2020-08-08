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
			$("#meni").css("position", "relative");
			$("#navbar").scrollTop();
			$("#navbar").animate({
				height: window.innerHeight * 0.09
			}, function () {
				$("#meni").css("bottom", "0");
				$("#navbar").css("overflow", "hidden");
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
			}, function () {
				$("#meni").css("position", "fixed");
				$("#meni").css("top", "0");
				$("#meni").css("width", "100%");
				$("#meni").css("z-index", "100");
				$("#meni").css("height", "9vh");
				$("#navbar").css("overflow", "auto");
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
$(document).on("click", ".hehe2", function (e) {
	e.preventDefault();
	//console.log($(this)[0].id);
	$.ajax({
		url: $(this)[0].href
	}).done((content) => {
		//console.log(content);
		txt = content;
		skill = "#";
		skill += $(this)[0].id;
		console.log(skill);
		$(".skill_stats").html(txt);
	});
});
