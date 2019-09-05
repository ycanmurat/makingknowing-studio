<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-xxl-7 col-lg-9 m-auto">
				<h3>giriş yap</h3>

				<form action="javascript:void(0)" method="POST" onsubmit="return False;">
					<div class="item">
						<label for="#">e-posta Adresiniz*</label>
						<input type="text" id="email" placeholder="e-posta adresiniz">
					</div>
					<div class="item">
						<label for="#">şifre*</label>
						<input type="password" id="password" placeholder="şifre">
					</div>
					<div class="loginButtons">
						<button type="button" onclick="login()">giriş yap</button>
						<button onclick="window.location.href = '<?=site_url('Sociallogin/google')?>'"><img src="<?=site_url('assets/Front/')?>images/icons/glogin.svg"> google ile giriş yap</button>
						<button onclick="window.location.href = '<?=site_url('Sociallogin/facebook')?>'"><img src="<?=site_url('assets/Front/')?>images/icons/fblogin.svg"> facebook ile giriş yap</button>
					</div>
					<div class="links">
						<a href="<?=site_url('sign-up')?>">Hesabınız mı yok, <b>şimdi kaydolun</b></a>
						<a href="<?=site_url('forgot-pass')?>">şifremi unuttum</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php if ($this->session->flashdata('social_error')) { ?>
	<script>
		$(document).ready(function function_name() {
    		Swal.fire({
                type: 'error',
                title: 'Hata !',
                confirmButtonText: 'Tamam',
                html: '<?=$this->session->flashdata('social_error')?>',
                animation: false,
            });
		})
	</script>
<?php } ?>