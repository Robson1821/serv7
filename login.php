<?php include("inc/header.php") ?>

<?php include("inc/menu.php") ?>

<div class="bannerLogin">
	<div class="formLogin_topo">
		<img src="images/login.png" alt="Imagem Login">

		<h2>Portal SERV 7</h2>

		<p class="corTitulo">Área exclusiva para os colaboradores.</p>
	</div>

	<div class="formLogin">
		<form action="#">
			<div class="form-group">
				<label class="sr-only" for="usuario">Usuário</label>
				<input type="text" class="form-control input-lg" id="user" name="user" placeholder="usuário" required>
			</div>

			<div class="form-group">
				<label class="sr-only" for="senha">Senha</label>
				<input type="password" class="form-control input-lg" id="password" name="password" placeholder="senha" required>
			</div>

			<button type="submit" class="btn btn-default btn-primary btn-md">OK</button>
		</form>

		<p><a href="#">Esqueci a minha senha</a></p>
	</div>
</div>

</div>


<?php include("inc/footer.php") ?>