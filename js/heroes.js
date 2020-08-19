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
		this.id = (typeofid === 'undefined') ? 0 : id;
		this.name = (typeofname === 'undefined') ? '' : name;
		this.biography = (typeofbio === 'undefined') ? '' : bio;
		this.img_url = (typeofimg_url === 'undefined') ? '' : img_url;
		this.img_url_evo = (typeofimg_url_evo === 'undefined') ? '' : img_url;
		this.skill_img = (typeofskill_img === 'undefined') ? '' : skill_img;
		this.warden = (typeofwarden === 'undefined') ? null : warden;
		this.mov_spd = (typeofmov_spd === 'undefined') ? 0 : mov_spd;
		this.atk_spd = (typeofatk_spd === 'undefined') ? 0 : atk_spd;
		this.atk = (typeofatk === 'undefined') ? 0 : atk;
		this.hp = (typeofhp === 'undefined') ? 0 : hp;
		this.acc = (typeofacc === 'undefined') ? 0 : acc;
		this.ddg = (typeofddg === 'undefined') ? 0 : ddg;
		this.crt = (typeofcrt === 'undefined') ? 0 : crt;
		this.crr = (typeofcrr === 'undefined') ? 0 : crr;
		this.crd = (typeofcrd === 'undefined') ? 0 : crd;
		this.skill = (typeofskill === 'undefined') ? null : skill;

	}
	output() {
		console.log("Hero: " + this.name + "\nId: " + this.id + "\nSkill name: "+this.skill_img);
	}
};