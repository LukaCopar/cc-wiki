class Talent {
	constructor(id, img_url, name, level, desc) {
		if(id === undefined)
			this.id = 0;
		if(img_url === undefined)
			this.img_url = "";
		if(name === undefined)
			this.name = "";
		if(level === undefined)
			this.lvl = 0;
		if(desc === undefined)
			this.description = "";

		this.id = id;
		this.img_url = img_url;
		this.name = name;
		this.lvl = level;
		this.description = desc;
	}

	replaceTalent(dest) {
		$($(dest).children()[1]).children().first().html("Lvl: " + this.lvl);
		$(dest).children().last().html(this.description);
		$($(dest.parentNode).children()[1]).children().attr("data", this.lvl);
	}
};