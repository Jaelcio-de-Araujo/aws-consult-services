<!DOCTYPE html>
<html>
<head>
	<title>Formulário com Bulma</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
	<style>
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.field.is-grouped > .control {
			flex-grow: 1;
		}
		.field.is-grouped .control:not(:last-child) {
			margin-right: 0.5rem;
		}
	</style>
</head>
<body>
	<div class="container">
		<form method="post" action="src/processo.php">
    <img src="br.jpg" style="display: block; margin:0 auto; width: 180px;">
    <br>
			<div class="field is-grouped">
				<label class="label">Serviço: </label>
				<div class="control">
					<input class="input is-hovered" name="servico" type="text" placeholder="Digite o serviço" style="margin-left: 5px;" required>
				</div>
				<div class="control">
					<button class="button is-info is-outlined" type="button" onclick="addInput('servico')">+</button>
				</div>
			</div>
			<div id="servico-container"></div>
			<div class="field is-grouped">
				<label class="label">Região: </label>
				<div class="control">
					<input class="input is-hovered" name="regiao" type="text" placeholder="Digite a região" style="margin-left: 5px;" required>
				</div>
				<div class="control">
					<button class="button is-info is-outlined" type="button" onclick="addInput('regiao')">+</button>
				</div>
			</div>
			<div id="regiao-container"></div>
			<div class="field">
				<div class="control">
					<button class="button is-link" type="submit">Enviar</button>
				</div>
			</div>
		</form>
	</div>
	<script>
		function addInput(containerId) {
			let container = document.getElementById(containerId + '-container');
			let input = document.createElement('input');
			input.classList.add('input');
			input.type = 'text';
			input.placeholder = 'Digite o ' + containerId;
			container.appendChild(input);
		}
	</script>
</body>
</html>