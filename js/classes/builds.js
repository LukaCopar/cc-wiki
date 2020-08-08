class Build {
	constructor() {
		this.heroes = [];
		for (var i = 0; i < arguments.length; i++) {
	    	this.heroes.push(arguments[i]);
	  	}
	}

	out() {
		this.heroes.forEach(function(e) {
			console.log(e.name);
		});
	}
};