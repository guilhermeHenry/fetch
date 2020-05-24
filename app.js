const URL = 'request.php';

document.querySelector('.form').addEventListener('submit', function (event) {
	event.preventDefault();

	let data = {
		age: 22,
		name: 'Guilherme'
	};

	fetch(URL, {
		method: 'post',
		body: JSON.stringify(data),
		headers: {'Content-Type': 'application/json'}
	}).then(function (response) {
		return response.text();
	}).then(function (text) {
		console.log(text);
	});
});

// ## UPLOAD ONE IMAGE
document.getElementById('formUploadImageInput').addEventListener('change', function () {
	const data = new FormData();
	const file = this.files.item(0);

	data.append('cover', file);

	fetch(URL, {
		method: 'post',
		body: data
	});
});

// ## UPLOAD MANY IMAGES
document.getElementById('inputUploadManyImages').addEventListener('change', function () {
	const data = new FormData();

	for (var i = 0; i < this.files.length; i++){
		data.append(i, this.files.item(i));
	}

	fetch(URL, {
		method: 'post',
		body: data
	});

});






























































































