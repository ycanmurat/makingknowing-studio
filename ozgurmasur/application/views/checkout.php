<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-9 m-auto">
				<h3>checkout</h3>

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
						<button><img src="<?=site_url('assets/Front/')?>images/icons/glogin.svg"> sign up with google</button>
						<button><img src="<?=site_url('assets/Front/')?>images/icons/fblogin.svg"> sign up with facebook</button>
					</div>
					<div class="links">
						<a href="<?=site_url('sign-up')?>">new customer<b>sign up</b></a>
						<a href="<?=site_url('forgot-pass')?>">forgot your password</a>
					</div>
				</form>
			</div>


			<div class="col-md-9 m-auto">
				<h3>or</h3>
				<a class="globalBtn" href="<?=site_url('cart/address')?>"> continue as guest</a>
			</div>
		</div>
	</div>
</section>