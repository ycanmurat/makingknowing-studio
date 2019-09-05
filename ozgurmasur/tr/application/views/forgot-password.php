<section class="login sendReset">
	<div class="container">
		<div class="row">
			<div class="col-md-7 m-auto">
				<h3>Şifremi Unuttum</h3>
				<form action="javascript:void(0)" method="POST" onsubmit="return False;">
					<div class="item">
						<label for="#">E-posta adresi*</label>
						<input type="text" id="reset_email" placeholder="E-posta adresi">
						<p>Şifrenizi sıfırlamanız için bağlantı içeren bir e-posta gönderilecek. <a href="<?=site_url('login')?>">iptal</a></p>
					</div>
					<div class="loginButtons">
						<button type="button" onclick="password_reset()">gönder</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>