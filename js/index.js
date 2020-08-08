$(function() {
	FastClick.attach(document.body);
});
$(document).ready(() => {

	

	var heroes;
	$.ajax({
		url: "/php/heroes.php"
	}).done(function(c) {
		heroes = JSON.parse(c);
		var b = new Build(heroes[0], heroes[1], heroes[2], heroes[3], heroes[4]);
		b.out();
	});


	$("#title").html("Heros");

	$("#talents").click(function (e) {
		var txt = '<div class="container-talents">';
		$.ajax({
			url: "/php/talents.php"
		}).done((content) => {
			console.log(heroes);
			txt += content;
			txt += "</div>";
			$("#content").html(txt);
			$("#title").html("Talents");
		});
	});

	$("#heroes").click(function () {
		if(typeof heroes !== 'undefined') {
			$.ajax({
				url: "/php/heroes.php"
			}).done((content) => {
				
				var lmao = JSON.parse(content);
				//console.log(lmao);
				lmao.forEach(function(hero) {
					var h = new Hero(hero.id, hero.img_url, hero.name, hero.skill_img);
					heroes.push(h);
				});
				tht = "";
				txt += content;
				txt += "</div>";
				//$("#content").html(txt);
				$("#title").html("Heros");
			});
		}
		$("#content").html("");
		var parent = $("<div>");
		parent.addClass("container-heros");
		$("#content").append(parent);
		heroes.forEach(function(hero) {
			var form = $("<form>");
			form.addClass("hero-open");
			form.attr("target", "_blank");
			form.attr("action", "./php/hero.php?hero=" + hero.id);
			var div = $("<div>");
			div.addClass("hero");
			var img = $("<img>");
			img.addClass("hero-card-img");
			img.attr("src", hero.img_url);
			img.attr("alt", "jah nema");
			var div2 = $("<div>");
			div2.addClass("hero-name-skil");
			var img2 = $("<img>");
			img2.addClass("hero-skill-img");
			img2.attr("src", hero.skill_img);
			var h4 = $("<h4>");
			h4.addClass("hero-name");
			h4.html(hero.name);

			div2.append(img2);
			div2.append(h4);
			div.append(img);
			div.append(div2);
			form.append(div);

			
			parent.append(form);
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
			$("#navbar").animate({
				height: window.innerHeight * 0.09
			}, function () {
				$("#meni").css("bottom", "0");
				$("#navbar").css("overflow", "auto");
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
		$(".skill_stats").html(txt);
	});
});
