let user_type = document.getElementById('user-type');

document.addEventListener('DOMContentLoaded', function () {
	document.querySelector('select').onchange = createField;
});

function createField(){
	let user = document.querySelector('select').value;
	if (user === "doctor"){
		document.getElementById('user-type').insertAdjacentHTML('afterend',
			"<label id='speciality' for='speciality'>Speciality<input type='text' required name='specialities'></label>"
		);
	}
	else {
		document.getElementById('speciality').remove();
	}
}

