var heroes;
var talents;

//RESIZING OF WINDOW
	var rtime;
	var timeout = false;
	var delta = 200;
	$(window).resize(function() {
		rtime = new Date();
		if (timeout === false) {
			timeout = true;
			setTimeout(resizeend, delta);
		}
	});
	
	function resizeend() {
		if (new Date() - rtime < delta) {
			setTimeout(resizeend, delta);
		} else {

			if($("#navbar").hasClass("animate")) {
				$("#navbar").css("top", "0");
				$("#navbar").css("height", "auto");
				}
			else {
					$("#meni").removeAttr('style');
					$("#navbar").removeAttr('style');
					$("#meni").css("position", "fixed");
					$("#meni").css("bottom", "0");
					$("#navbar").css("height", "0");
					$("#navbar").css("overflow", "hidden");
			}
			timeout = false;
		}               
	}


$(document).ready(() => {
	if(window.localStorage.getItem("heroes") == null) {
		$.ajax({
			url: "/cc-wiki/php/heroes.php"
		}).done(function(c) {
			console.log("Heroes not found locally. Fetching from server...");
			heroess = JSON.parse(c);
			var ins = [];
			heroess.forEach(function(val) {
				var hiro = new Hero();
				hiro.id = (typeof val.id === 'undefined') ? 0 : val.id; 
				hiro.name = (typeof val.name === 'undefined') ? 0 : val.name;
				hiro.biography = (typeof val.biography === 'undefined') ? 0 : val.biography;
				hiro.img_url = (typeof val.img_url === 'undefined') ? '' : val.img_url;
				hiro.img_url_evo = (typeof val.img_url_evo === 'undefined') ? '' : val.img_url_evo;
				hiro.skill_img = (typeof val.skill_img === 'undefined') ? '' : val.skill_img;
				hiro.warden = (typeof val.warden === 'undefined') ? null : val.warden;
				hiro.mov_spd = (typeof val.mov_spd === 'undefined') ? 0 : val.mov_spd;
				hiro.atk_spd = (typeof val.atk_spd === 'undefined') ? 0 : val.atk_spd;
				hiro.atk = (typeof val.atk === 'undefined') ? 0 : val.atk;
				hiro.hp = (typeof val.hp === 'undefined') ? 0 : val.hp;
				hiro.acc = (typeof val.acc === 'undefined') ? 0 : val.acc;
				hiro.ddg = (typeof val.ddg === 'undefined') ? 0 : val.ddg;
				hiro.crt = (typeof val.crt === 'undefined') ? 0 : val.crt;
				hiro.crr = (typeof val.crr === 'undefined') ? 0 : val.crr;
				hiro.crd = (typeof val.crd === 'undefined') ? 0 : val.crd;
				hiro.skill = (typeof val.skill === 'undefined') ? null : val.skill;
				if(window.localStorage.getItem(val.name) == null) {
					ins.push(val);
				}
			});
			window.localStorage.setItem("heroes", JSON.stringify(ins));
			//console.log(c);
		});
	}

	else {
		heroes = [];
		var temps = JSON.parse(window.localStorage.getItem("heroes"));
		temps.forEach(function(el) {
			var hero = new Hero();
			hero.id = (typeof el.id === 'undefined') ? 0 : el.id;
			hero.name = (typeof el.name === 'undefined') ? 0 : el.name;
			hero.biography = (typeof el.biography === 'undefined') ? '' : el.biography;
			hero.img_url = (typeof el.img_url === 'undefined') ? '' : el.img_url;
			hero.img_url_evo = (typeof el.img_url_evo === 'undefined') ? '' : el.img_url_evo;
			hero.skill_img = (typeof el.img_url === 'undefined') ? '' : el.img_url;
			hero.warden = (typeof el.warden === 'undefined') ? null : el.warden;
			hero.mov_spd = (typeof el.mov_spd === 'undefined') ? 0 : el.mov_spd;
			hero.atk_spd = (typeof el.atk_spd === 'undefined') ? 0 : el.atk_spd;
			hero.atk = (typeof el.atk === 'undefined') ? 0 : el.atk;
			hero.hp = (typeof el.hp === 'undefined') ? 0 : el.hp;
			hero.acc = (typeof el.acc === 'undefined') ? 0 : el.acc;
			hero.ddg = (typeof el.ddg === 'undefined') ? 0 : el.ddg;
			hero.crt = (typeof el.crt === 'undefined') ? 0 : el.crt;
			hero.crr = (typeof el.crr === 'undefined') ? 0 : el.crr;
			hero.crd = (typeof el.crd === 'undefined') ? 0 : el.crd;
			hero.skill = (typeof el.skill === 'undefined') ? null : el.skill;
			heroes.push(hero);
		});
		//console.log(heroes);
	}

	
	
	if(window.localStorage.getItem("talents") == null) {
		$.ajax({
		url: "/cc-wiki/php/talents.php"
		}).done(function(c) {
			talents = JSON.parse(c);
			console.log("Talents not found locally. Fetching from server...");
			var prevName = "";

			var imgs = [];
			talents.forEach(function (e) {
				if(e.name != prevName) {
					$.ajax({
						type: "POST",
						url: "/cc-wiki/php/images.php",
						data: {
							url : e.img_url
						}
					}).done(function(c) {
						var img = c;
						if(window.localStorage.getItem(e.name) == null) {
							window.localStorage.setItem(e.name, img);
						}
						imgs.push(img);
					});
				}
				prevName = e.name;
			});
			window.localStorage.setItem("talents", JSON.stringify(talents));
		});
	}
	else {
		talents = [];
		JSON.parse(window.localStorage.getItem("talents")).forEach(function(el) {
			var talent = new Talent(el.id, el.img_url, el.name, el.level, el.description);
			talents.push(talent);
		});
	}
	//Service worker
	pizda();
	$("#title").html("Heros");

	$("#talents").click(function (e) {
		if(typeof talents === 'undefined' || talents.length == 0) {
			$.ajax({
				url: "/cc-wiki/php/talents.php"
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
		//console.log(talents);
		talents.forEach(function(e, val) {
			//console.log(e);
			if(e.lvl == 1) {
				var h3 = $("<h3>");
			var br = $("<br>");
			var div = $("<div>");
			div.addClass("talent-lvl");
			h3.html("Lvl: " + e.lvl);
			
			var img = $("<img>");
			var h4 = $("<h4>");
			var hr = $("<hr>");
			var p = $("<p>");
			var divM = $("<div>");
			h4.html(e.name);
			p.html(e.description);
			img.addClass("talent-img");
			img.attr("src", window.localStorage.getItem(e.name));
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
			a1.attr("href", "./php/talent.php?name="+e.name+"&la=1&lvl="+e.lvl);
			a2.attr("href", "./php/talent.php?name="+e.name+"&la=2&lvl="+e.lvl);

			a1.addClass("hehe plus");
			a1.attr("data", e.lvl);
			a1.html("+");
			a2.addClass("hehe minus");
			a2.attr("data", e.lvl);
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
				url: "/cc-wiki/php/heroes.php"
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
			//img.attr("src", window.localStorage.getItem("zeph"));
			img.attr("id", hero.id);
			img.attr("alt", "jah nema");
			var div2 = $("<div>");
			div2.addClass("hero-name-skil");
			var img2 = $("<img>");
			img2.addClass("hero-skill-img");
			//img2.attr("src", window.localStorage.getItem("zeph"));
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

	$(window).on('resize', function(el) {
		if(!$("#navbar").hasClass("animate") && $(el.target.parentNode).hasClass("active")) {
			$("#navbar").css("height", window.innerHeight * 0.09);
			$("#meni").css("bottom", "0");
			$("#navbar").css("overflow", "hidden");
		}
		else {
			$("#navbar").css("height", window.innerHeight);		
			$("#meni").css("position", "fixed");
			$("#meni").css("top", "0");
			$("#meni").css("width", "100%");
			$("#meni").css("z-index", "100");
			$("#navbar").css("overflow", "auto");
		}
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
			$("#meni").removeAttr('style');
			$("#navbar").removeAttr('style');
				$("#meni").css("bottom", "0");
				$("#navbar").css("overflow", "hidden");
				$("#navbar").css("height", "0");
				$("#meni").css("position", "fixed")
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
				$("#navbar").css("overflow", "auto");
				$("#navbar").css("visibility", "none");
				$("#navbar").css("padding-top", "10px");
			});
			$(e.target.parentNode).addClass("active");
		}

	});

});



$(document).on("click", ".hero-open", function (e) {
	e.preventDefault();
	var hero;
	heroes.forEach(function(el) {
		if(el.id == e.target.id)
			hero = el;
	});
	console.log(hero);
	var txt = '<div class="container">';
	$.ajax({
		url: $(this)[0].action
	}).done((content) => {
		txt += content;
		txt += "</div>";
		$("#title").html("Hero");
		//console.log(txt);
		$("#content").html("");

		var divLvl = $("<div>");
		var aPlus = $("<a>");
		var aMinus = $("<a>");
		var h3 = $("<h3>");

		divLvl.append(aPlus);
		divLvl.append(h3);
		divLvl.append(aMinus);
		divLvl.text("lmao test");



		var divHp = $("<div>");
		var divAtk = $("<div>");
		var divAtkSpd = $("<div>");
		var divCrit = $("<div>");
		var divDodge = $("<div>");
		var divCritDmg = $("<div>");
		var divMovSpd = $("<div>");
		var divAcc = $("<div>");
		var divCritRes = $("<div>");
		var h4 = $("<h4>");


		var imgHp = $("<img>");
		var imgAtk = $("<img>");
		var imgAtkSpd = $("<img>");
		var imgCrit = $("<img>");
		var imgDodge = $("<img>");
		var imgCritDmg = $("<img>");
		var imgMovSpd = $("<img>");
		var imgAcc = $("<img>");
		var imgCritRes = $("<img>");

		imgHp.addClass("stat_img");
		imgAtk.addClass("stat_img");
		imgAtkSpd.addClass("stat_img");
		imgCrit.addClass("stat_img");
		imgDodge.addClass("stat_img");
		imgCritDmg.addClass("stat_img");
		imgMovSpd.addClass("stat_img");
		imgAcc.addClass("stat_img");
		imgCritRes.addClass("stat_img");


		imgHp.attr("id", "imgHp");
		imgAtk.attr("id", "imgAtk");
		imgAtkSpd.attr("id", "imgAtkSpd");
		imgCrit.attr("id", "imgCrit");
		imgDodge.attr("id", "imgDodge");
		imgCritDmg.attr("id", "imgCritDmg");
		imgMovSpd.attr("id", "imgMovSpd");
		imgAcc.attr("id", "imgAcc");
		imgCritRes.attr("id", "imgCritRes");


		imgHp.text("imgHp" + hero.hp);
		imgAtk.text("imgAtk" + hero.atk);
		imgAtkSpd.text("imgAtkSpd" + hero.atk_spd);
		imgCrit.text("imgCrit" + hero.crr);
		imgDodge.text("imgDodge" + hero.ddg);
		imgCritDmg.text("imgCritDmg" + hero.crd);
		imgMovSpd.text("imgMovSpd" + hero.mov_spd);
		imgAcc.text("imgAcc" + hero.acc);
		imgCritRes.text("imgCritRes" + hero.crr);


		h4.text("lvl: 200 devo");

		var imgSkill = $("<img>");
		var imgHero = $("<img>");
		var divSkillDesc = $("<div>");

		//imgHero.attr("src", window.localStorage.getItem("zeph"));
		imgHero.addClass("skill_desc");

		divSkillDesc.attr("alt", "nema");

		divSkillDesc.append(divLvl);


		var divSkillImg = $("<div>");
		var divSkillStat = $("<div>");
		var divHeroStat = $("<div>");
		var divHeroImg = $("<div>");

		divSkillImg.addClass("hero_skill_img");
		divSkillStat.addClass("skill_stats");

		divHeroStat.addClass("hero_stats");
		divHeroImg.addClass("hero_img");

		divSkillStat.append(divSkillDesc);

		divHeroImg.append(imgHero);

		divHeroStat.append(h4);
		divHeroStat.append(divHp);
		divHeroStat.append(divAtk);
		divHeroStat.append(divAtkSpd);
		divHeroStat.append(divCrit);
		divHeroStat.append(divDodge);
		divHeroStat.append(divCritDmg);
		divHeroStat.append(divMovSpd);
		divHeroStat.append(divAcc);
		divHeroStat.append(divCritRes);

		var divStats = $("<div>");
		var divHeroImg = $("<div>");

		divHeroImg.append(imgHero);
		divHeroImg.append(divSkill);

		var divInnerHero = $("<div>");
		var divSkill = $("<div>");

		divInnerHero.addClass("hero1");
		divSkill.addClass("skill1");

		divInnerHero.append(divHeroImg);
		divInnerHero.append(divHeroStat);

		divSkill.append(divSkillImg);
		divSkill.append(divSkillStat);

		var divHero = $("<div>");

		divHero.attr("id", "hero");
		divHero.append(divInnerHero);
		divHero.append(divSkill);
		console.log(divHero[0]);
		$("#content").append(divHero);
		//Ikonce
		var icons = JSON.parse(window.localStorage.getItem("icons"));
		var atk = icons[0];
		var acc = icons[7];
		var crt = icons[2];
		var crr = icons[3];
		var crd = icons[4];
		var hp = icons[5];
		var ddg = icons[6];
		var atk_spd = icons[1];
		$($(".hero_img").first().children()[0]).attr("src", window.localStorage.getItem("zeph"));
		$($(".hero_skill_img").first().children()[0]).attr("src", window.localStorage.getItem("zeph"));
		
		$(".hero_stats > .stat").each(function(ind, el) {
			icons.forEach(function(ell) {
				//console.log(ell.name == $(el).children()[0].id);
				if(ell.name == $(el).children()[0].id) {
					$(el).children().attr("src", ell.data);
				}
			});
		});
	});
});


$(document).on("click", ".hehe", function (e) {
	e.preventDefault();
	if(typeof talents === 'undefined' || talents.length == 0) {
		$.ajax({
			url: $(this)[0].href
		}).done((content) => {
			txt = content;
			talent = "#";
			talent += $(this)[0].id;
			$(talent).html(txt);
		});
	}
	else {
		var tal = new Talent(); 
		$.each(talents, function(ey, val) {
			if(val.name.replace(/ /g, "") == e.target.id) {
				if($($(e)[0].target).hasClass("plus")) {
					var lvl = ((parseInt($(e.target).attr("data"), 10) + 1) > 10) ? 10 : (parseInt($(e.target).attr("data"), 10) + 1);
					if(val.lvl == lvl) {
						tal.id = val.id;
						tal.name = val.name;
						tal.lvl = val.lvl;
						tal.img_url = val.img_url;
						tal.description = val.description;
					}
				}
				if($($(e)[0].target).hasClass("minus")) {
					var lvl = ((parseInt($(e.target).attr("data"), 10) - 1) < 1) ? 1 : (parseInt($(e.target).attr("data"), 10) - 1);
					if(val.lvl == lvl) {
						tal.id = val.id;
						tal.name = val.name;
						tal.lvl = val.lvl;
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
	$.ajax({
		url: $(this)[0].href
	}).done((content) => {
		txt = content;
		$(".skill_stats").html(txt);
	});
});

function pizda() {
  	navigator.serviceWorker && navigator.serviceWorker.register('./sw.js').then(function(registration) {
	  //console.log('Excellent, registered with scope: ', registration.scope);
	});
}