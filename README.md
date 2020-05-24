# Fetch
``` javascript
fetch('request.php', {
	method: 'post',
	body: JSON.stringify(data),
	headers: {'Content-Type': 'application/json'}
}).then(function (response) {
	return response.text();
}).then(function (text) {
	console.log(text);
});
```
## Receiving JSON POST data via PHP
`JSON.stringify(data)`
`headers: {'Content-Type': 'application/json'}`
`file_get_contents("php://input")`
[Porque usar file_get_contents?](https://davidwalsh.name/php-json)

## Como fazer upload de imagens
[Upload files with Fetch - JavaScript Tutorial](https://www.youtube.com/watch?v=cei2Ch683q0)

## Artigos
+ [braziljs](https://braziljs.org/artigos/fetch-api-e-o-javascript/)
+ [What are all the possible values for HTTP “Content-Type” header?]
(https://stackoverflow.com/questions/23714383/what-are-all-the-possible-values-for-http-content-type-header)

























