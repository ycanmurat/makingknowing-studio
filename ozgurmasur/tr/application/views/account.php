<section class="account">
	<div class="container">
		<div class="row">
			<?php $this->load->view('account-menu'); ?>
			<div class="col-md-12">
				<h3>Hoşgeldin <?=$user->name?> <?=$user->surname?></h3>
				<form action="javascript:void(0)" onsubmit="return false;">
					<div class="itemGroup">
						<div class="item">
							<label for="#">Ad</label>
							<input type="text" placeholder="Ad" value="<?=$user->name?>" id="ac_name">
						</div>
						<div class="item">
							<label for="#">Soyad</label>
							<input type="text" placeholder="Soyad" value="<?=$user->surname?>" id="ac_surname">
						</div>
					</div>
					<div class="itemGroup">
						<div class="item">
							<label for="#">E-posta</label>
							<input type="text" placeholder="E-postanız" value="<?=$user->email?>" id="ac_email">
						</div>
						<div class="item">
							<label for="#">Telefon</label>
							<input type="text" placeholder="Telefon" value="<?=$user->phone?>" id="ac_phone">
						</div>
					</div>
					<div class="itemGroup">
						<div class="item">
							<label for="">Doğum Tarihi</label>
							<input type="date" value="<?=$user->birth_day?>" id="ac_birth_day">
						</div>
						<div class="item">

						</div>
					</div>
					<div class="itemGroup">
						<div class="item genderArea">
							<div class="gender">
								<input type="radio" id="man" name="gender" value="1" <?=$user->gender == 1?'checked':''?>>
								<label for="man">ERKEK</label>
							</div>
							<div class="gender">
								<input type="radio" id="woman" name="gender" value="2" <?=$user->gender == 2?'checked':''?>>
								<label for="woman">KADIN</label>
							</div>
						</div>
					</div>
					<button type="button" onclick="accountSave()">Kaydet</button>
					<h3>Şifre Değiştir</h3>
					<div class="item">
						<label for="pass">Yeni Şifre</label>
						<input type="password" placeholder="Yeni Şifre" id="pass">
					</div>
					<div class="item">
						<label for="pass2">Yeni Şifre Tekrar</label>
						<input type="password" placeholder="Yeni Şifre Tekrar" id="pass2">
					</div>
					<div>
						<button type="button" onclick="accountPassChange()">Kaydet</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>