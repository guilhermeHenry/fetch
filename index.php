<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Fetch - Envios de dados</title>
</head>
<body>
	<form class="form" action="request" method="post">
		<input type="text" name="name" value="Guilherme Henrique" placeholder="Nome">
		<input type="text" name="birth" value="10/02/1998" placeholder="Idade">
		<input type="text" name="document" value="359.959.955-95" placeholder="CPF">
		<button>Enviar</button>
	</form>

	<hr>
	<h1>Upload one Image</h1>
	<form id="formUploadImage" action="request" method="post" enctype="multipart/form-data">
		<input type="file" id="formUploadImageInput">
	</form>

	<hr>
	<h1>Upload many Images</h1>
	<form action="request" method="post" enctype="multipart/form-data">
		<input type="file" id="inputUploadManyImages" multiple>
	</form>

	<script src="app.js"></script>
</body>
</html>