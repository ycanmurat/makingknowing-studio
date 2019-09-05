<section class="login sendReset">
	<div class="container">
		<div class="row">
			<div class="col-md-7 m-auto">
				<h3>forgot password</h3>
				<form action="javascript:void(0)" method="POST" onsubmit="return False;">
					<div class="item">
						<label for="#">e-mail address*</label>
						<input type="text" id="reset_email" placeholder="e-mail adress">
						<p>we will send you an email to reset your password. <a href="<?=site_url('login')?>">cancel</a></p>
					</div>
					<div class="loginButtons">
						<button type="button" onclick="password_reset()">send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>