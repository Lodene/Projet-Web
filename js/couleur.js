var slider = document.getElementById("myRange");
var output = document.getElementById("demo");

var texte = document.getElementById("demo"); 
texte.setAttribute("style", "color:#57F700");

var texte = document.getElementById("myRange"); 
texte.setAttribute("style", "background: #57F700"); 

slider.oninput = function() {
	if (slider.value == 1) {
	var texte = document.getElementById("demo"); 
	texte.setAttribute("style", "color:#57F700");

	var texte = document.getElementById("myRange"); 
	texte.setAttribute("style", "background: #57F700");
	
	}
	if (slider.value == 2) {
		var texte = document.getElementById("demo"); 
		texte.setAttribute("style", "color:orange"); 

		var texte = document.getElementById("myRange"); 
		texte.setAttribute("style", "background: orange");
	}
	if (slider.value == 3) {
		var texte = document.getElementById("demo"); 
		texte.setAttribute("style", "color:red"); 

		var texte = document.getElementById("myRange"); 
		texte.setAttribute("style", "background: red");
	}

}