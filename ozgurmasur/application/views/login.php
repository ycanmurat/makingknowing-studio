<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-xxl-7 col-lg-9 m-auto">
				<h3>customer login</h3>

				<form action="javascript:void(0)" method="POST" onsubmit="return False;">
					<div class="item">
						<label for="#">e-mail address*</label>
						<input type="text" id="email" placeholder="e-mail adress">
					</div>
					<div class="item">
						<label for="#">password*</label>
						<input type="password" id="password" placeholder="password">
					</div>
					<div class="loginButtons">
						<button type="button" onclick="login()">login</button>
						<button onclick="window.location.href = '<?=site_url('Sociallogin/google')?>'"><img src="<?=site_url('assets/Front/')?>images/icons/glogin.svg"> Log In with google</button>
						<button onclick="window.location.href = '<?=site_url('Sociallogin/facebook')?>'"><img src="<?=site_url('assets/Front/')?>images/icons/fblogin.svg"> Log In with facebook</button>
					</div>
					<div class="links">
						<a href="<?=site_url('sign-up')?>">new customer <b>sign up</b></a>
						<a href="<?=site_url('forgot-pass')?>">forgot your password</a>
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
                title: 'Error !',
                confirmButtonText: 'Okey',
                html: '<?=$this->session->flashdata('social_error')?>',
                animation: false,
            });
		})
	</script>
<?php } ?>