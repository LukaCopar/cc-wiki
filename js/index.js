var heroes;
var talents;

$(document).ready(() => {
	$(function() {
		FastClick.attach(document.body);
	});

	$.ajax({
		url: "/php/heroes.php"
	}).done(function(c) {
		heroes = JSON.parse(c);
	});

	$.ajax({
		url: "/php/talents.php"
	}).done(function(c) {
		talents = JSON.parse(c);
	});


	$("#title").html("Heros");

	$("#talents").click(function (e) {
		if(typeof talents === 'undefined' || talents.length == 0) {
			$.ajax({
				url: "/php/talents.php"
			}).done((content) => {
				var lmao2 = JSON.parse(content);
				lmao2.forEach(function(e) {
					var t = new Talent(e.id, e.img_url, e.name, e.level);
					talents.push(t);
				});
				
			});
		}
		$("#title").html("Talents");
		$("#content").html("");
		var parent = $("<div>");
		parent.addClass("container-talents");
		$("#content").append(parent);
		talents.forEach(function(e, val) {
			if(e.level == 1) {
				var h3 = $("<h3>");
			var br = $("<br>");
			var div = $("<div>");
			div.addClass("talent-lvl");
			h3.html("Lvl: " + e.level);
			
			var img = $("<img>");
			var h4 = $("<h4>");
			var hr = $("<hr>");
			var p = $("<p>");
			var divM = $("<div>");
			h4.html(e.name);
			p.html(e.description);
			img.addClass("talent-img");
			img.attr("src", e.img_url);
			img.attr("alt", "jah");
			divM.addClass("mrs1");
			
			div.append(h3);
			div.append(br);

			divM.append(img);
			divM.append(div);
			divM.append(h4);
			divM.append(hr);
			divM.append(p);


			var a1 = $("<a>");
			var a2 = $("<a>");
			var divN = $("<div>");
			divN.addClass("lvl-container");
			a1.attr("id", e.name.replace(/ /g, ""));
			a2.attr("id", e.name.replace(/ /g, ""));
			a1.attr("href", "../php/talent.php?name="+e.name+"&la=1&lvl="+e.level);
			a2.attr("href", "../php/talent.php?name="+e.name+"&la=2&lvl="+e.level);

			a1.addClass("hehe plus");
			a1.attr("style", "float:left");
			a1.attr("data", e.level);
			a1.html("+");
			a2.addClass("hehe minus");
			a2.attr("style", "float:left");
			a2.attr("data", e.level);
			a2.html("-");

			divN.append(a1);
			divN.append(a2);



			var divP = $("<div>");
			divP.append(divM);
			divP.append(divN);
			divP.addClass("talent");
			divP.attr("id", e.name.replace(/ /g, ""));

			parent.append(divP);
			}
		});
	});

	$("#heroes").click(function () {
		if(typeof heroes === 'undefined' || heroes.length == 0) {
			$.ajax({
				url: "/php/heroes.php"
			}).done((content) => {
				console.log("Getting heroes");
				var lmao = JSON.parse(content);
				lmao.forEach(function(hero) {
					var h = new Hero(hero.id, hero.img_url, hero.name, hero.skill_img);
					heroes.push(h);
				});
			});
		}
		$("#title").html("Heros");
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
		$("#navbar").scrollTop(0);
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
	if(typeof talents === 'undefined' || talents.length == 0) {
		$.ajax({
			url: $(this)[0].href
		}).done((content) => {
			//console.log(content);
			txt = content;
			talent = "#";
			talent += $(this)[0].id;
			$(talent).html(txt);
		});
	}
	else {
		var tal = new Talent(); 
		$.each(talents, function(ey, val) {
			//console.log(val.name.replace(/ /g, ""));
			if(val.name.replace(/ /g, "") == e.target.id) {
				if($($(e)[0].target).hasClass("plus")) {
					var lvl = ((parseInt($(e.target).attr("data"), 10) + 1) > 10) ? 10 : (parseInt($(e.target).attr("data"), 10) + 1);
					if(val.level == lvl) {
						tal.id = val.id;
						tal.name = val.name;
						tal.level = val.level;
						tal.img_url = val.img_url;
						tal.description = val.description;
					}
				}
				if($($(e)[0].target).hasClass("minus")) {
					var lvl = ((parseInt($(e.target).attr("data"), 10) - 1) < 1) ? 1 : (parseInt($(e.target).attr("data"), 10) - 1);
					console.log(lvl);
					if(val.level == lvl) {
						tal.id = val.id;
						tal.name = val.name;
						tal.level = val.level;
						tal.img_url = val.img_url;
						tal.description = val.description;
					}
				}
			}
		});
		tal.replaceTalent($(e.target.parentNode).prev()[0]);
	}

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
