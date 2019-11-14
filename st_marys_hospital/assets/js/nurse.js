document.addEventListener("DOMContentLoaded", () => {
	document.getElementById("height").onkeyup = calculateBMI;
	document.getElementById("weight").onchange = calculateBMI;
});


let height = document.getElementById("height");
let weight = document.getElementById("weight");


function calculateBMI()
{
	let bmi = 0;
	try {
		let w = parseInt(document.querySelector("#weight").value)  || 0;
		let h = parseFloat(document.querySelector("#height").value);
		let bmi = w / (h * h);
		document.querySelector("#bmi").value = bmi.toString();
	}catch (e) {
		document.querySelector("#bmi").value = bmi.toString();
	}
}
