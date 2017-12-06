<?php include("inc/header.php") ?>

<?php include("inc/menu.php") ?>

<div class="col-xs-12 col-lg-4 textoBanner bottom">
    <p>Fale conosco</p>

    <span class="hr_branco"><hr></span>

    <p>
        Tome um café com a nossa equipe e descubra tudo o que podemos fazer por você ;-)
    </p>

</div>

<div class="col-xs-12 col-lg-8 bannerInterno">
    <img src="images/banner_interno/banner_contato2.jpg" alt="Banner Quem Somos">
</div>

</div>


<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="col-md-4 contato">
				<h2 class="corTitulo">Contatos</h2>

				<span class="hr_azul"><hr></span>

				<div class="telefone">
					<p class="boldSaira">
						<img src="images/telefone.png" alt="Telefone">Telefone:
					</p>

					<p>(11) 2027-9797 | (11) 4432-0741</p>
				</div>

				<div class="whatsapp">
					<p class="boldSaira">
						<img src="images/whats.png" alt="Telefone">WhatsApp:
					</p>

					<p>(11) 98355-7664</p>
				</div>

				<div class="email">
					<p class="boldSaira">
						<img src="images/email.png" alt="Telefone">E-mail:
					</p>

					<p><a href="mailto:contato@serv7.com.br">contato@serv7.com.br</a></p>
				</div>

				<div class="redeSocial">
					<p class="boldSaira">Redes Sociais</p>

					<a href="#"><img src="images/facebook_contato.png" alt="Facebook"></a>

					<a href="#"><img src="images/instagram_contato.png" alt="Instagram"></a>
				</div>
			</div>

			<div class="col-md-8 formulario">
				<h2 class="corTitulo">Preencha o formulário</h2>

				<span class="hr_azul"><hr></span>

				<form action="#">
					<div class="form-group">
						<label class="sr-only" for="nome">Digite seu nome</label>
						<input type="text" class="form-control input-lg" id="nome" name="nome" placeholder="Digite seu nome" required>
					</div>

					<div class="form-group">
						<label class="sr-only" for="email">Digite seu e-mail</label>
						<input type="email" class="form-control input-lg" id="email" name="email" placeholder="Digite seu email" required>
					</div>

					<div class="form-group">
						<label class="sr-only" for="mensagem">Mensagem</label>
						<textarea class="form-control input-lg" rows="5" id="mensagem" placeholder="Digite sua mensagem"></textarea>
					</div>

					<button type="submit" class="btn btn-default btn-primary btn-md">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="container-fluid mapaContato">
		<div class="row">
			<div class="mapa">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7309.68979996397!2d-46.53489120664913!3d-23.64572494082691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce42bf8e800df9%3A0x89b9dfc4fed2730d!2sAv.+Industrial%2C+780+-+Jardim%2C+Santo+Andr%C3%A9+-+SP!5e0!3m2!1sen!2sbr!4v1512149981660" width="100%" height="750" frameborder="0" style="border:0"></iframe>
			</div>

			<div class="endereco">
				<img src="images/mark.png" alt="Marcador de Mapa">

				<p>Endereço</p>

				<p>Avenida Industrial, 780 - Sala 714</p>
			</div>
		</div>
	</div>
</div>


<?php include("inc/footer.php") ?>