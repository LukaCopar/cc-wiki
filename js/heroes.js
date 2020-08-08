class Hero {
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

	}
	output() {
		console.log("Hero: " + this.name + "\nId: " + this.id + "\nSkill name: "+this.skill_img);
	}
};