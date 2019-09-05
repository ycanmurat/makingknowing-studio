<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-7 m-auto">
				<h3>Kaydol</h3>

				<form action="javascript:void(0)" method="POST" onsubmit="return False;">
					<div class="item">
						<label for="#">Ad</label>
						<input type="text" id="re_name" placeholder="Ad">
					</div>
					<div class="item">
						<label for="#">Soyad</label>
						<input type="text" id="re_surname" placeholder="Soyad">
					</div>
					<div class="item">
						<label for="#">e-posta adresi*</label>
						<input type="text" id="re_email" placeholder="e-posta adresi">
					</div>
					<div class="item">
						<label for="#">telefon</label>
						<input type="text" id="re_phone" placeholder="telefon">
					</div>
					<div class="item">
						<label for="#">Şifre*</label>
						<input type="password" id="re_password" placeholder="Şifre">
					</div>
					<div class="confirm-checks">
						<input type="checkbox" id="gdpr" required="">
						<label for="gdpr"><a href="<?=site_url('s/kvkk-aydinlatma-metni')?>" target="_blank">KVKK</a> koşullarını okudum kabul ediyorum. </label>
					</div>
					<div class="loginButtons">
						<button type="button" onclick="signUp()">Yeni Hesap</button>
					</div>
					<div class="links">
						<a href="<?=site_url('login')?>">Zaten Kayıtlı mısınız ? GİRİŞ YAP</a>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>