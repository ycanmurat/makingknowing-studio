<section class="login sendReset">
	<div class="container">
		<div class="row">
			<div class="col-md-7 m-auto">
				<h3>Şifre Sıfırlama</h3>
				<p class="info"><b><?=$user_information->email?></b> Email adresiniz için Yeni parolanızı girin</p>
				<form action="javascript:void(0)" onsubmit="return false;">
					<input type="hidden" id="token" value="<?=$reset_token?>">
					<div class="item">
						<label for="password">Şifre*</label>
						<input type="password" id="newpass" placeholder="Şifre">
					</div>
					<div class="item">
						<label for="newpass2">Şifre Tekrar*</label>
						<input type="password" id="newpass2" placeholder="Şifre">
					</div>
					<div class="loginButtons">
						<button type="button" onclick="passwordNew()">Reset Password</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>