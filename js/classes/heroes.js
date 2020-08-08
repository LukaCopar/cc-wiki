class Hero {
	constructor(id, img_url, name, skill_img) {
		this.id = id;
		this.img_url = img_url;
		this.name = name;
		this.skill_img = skill_img;
	}
	output() {
		console.log("Hero: " + this.name + "\nId: " + this.id + "\nSkill name: "+this.skill_img);
	}
};