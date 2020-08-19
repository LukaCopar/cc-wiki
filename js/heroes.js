class Hero {
	this.id = 0; 
	this.name = 0;
	this.biography = 0;
	this.img_url = 0;
	this.img_url_evo = 0;
	this.skill_img = 0;
	this.warden = 0;
	this.mov_spd = 0;
	this.atk_spd = 0;
	this.atk = 0;
	this.hp = 0;
	this.acc = 0;
	this.ddg = 0;
	this.crt = 0;
	this.crr = 0;
	this.crd = 0;
	this.skill = 0;

	constructor(id, img_url, bio, name, skill_img, img_url_evo, warden, mov_spd, atk_spd, atk, hp, acc, ddg, crt, crr, crd) {
		this.id = (typeof id === 'undefined') ? 0 : id;
		this.name = (typeof name === 'undefined') ? '' : name;
		this.biography = (typeof bio === 'undefined') ? '' : bio;
		this.img_url = (typeof img_url === 'undefined') ? '' : img_url;
		this.img_url_evo = (typeof img_url_evo === 'undefined') ? '' : img_url;
		this.skill_img = (typeof skill_img === 'undefined') ? '' : skill_img;
		this.warden = (typeof warden === 'undefined') ? null : warden;
		this.mov_spd = (typeof mov_spd === 'undefined') ? 0 : mov_spd;
		this.atk_spd = (typeof atk_spd === 'undefined') ? 0 : atk_spd;
		this.atk = (typeof atk === 'undefined') ? 0 : atk;
		this.hp = (typeof hp === 'undefined') ? 0 : hp;
		this.acc = (typeof acc === 'undefined') ? 0 : acc;
		this.ddg = (typeof ddg === 'undefined') ? 0 : ddg;
		this.crt = (typeof crt === 'undefined') ? 0 : crt;
		this.crr = (typeof crr === 'undefined') ? 0 : crr;
		this.crd = (typeof crd === 'undefined') ? 0 : crd;
		this.skill = (typeof skill === 'undefined') ? null : skill;

	}
	output() {
		console.log("Hero: " + this.name + "\nId: " + this.id + "\nSkill name: "+this.skill_img);
	}
};