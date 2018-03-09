
			
			<h2>Contato</h2>
			<form action="../src/Controller.php" method="post">
				<label for="#">Nome</label><input type="text" class="form-control input-contato"  maxlength="40">
				<label for="#">Empresa</label><input type="text" class="form-control input-contato"  maxlength="40">
				<label for="#">Telefone</label><input type="text" class="form-control input-contato"  maxlength="16">
				<label for="#">Email</label><input type="mail" class="form-control input-contato"  maxlength="40">
				<label for="#">Mensagem</label><textarea type="text-area" class="form-control input-contato" placeholder="Digite aqui sua mensagem..."></textarea>
				<br>
				<input type="submit" class="btn btn-danger botao-vermelho enviar-contato" value="Enviar">
			</form>