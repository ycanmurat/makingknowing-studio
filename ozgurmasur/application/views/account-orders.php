<section class="account orders">
	<div class="container">
		<div class="row">
			<?php $this->load->view('account-menu'); ?>
			<div class="col-md-12">
      			<div class="order-wrapper-area">
	                <div class="orders-wrapper">
			            <?php if ($orders == array()) { ?>
			                <div class="blank-order">
			                    <h5>You have no placed orders yet</h5>
			                    <a href="<?=site_url()?>">CONTINUE SHOPPING</a>
			                </div>
			            <?php }else{ ?>
							<div class="head">
								<p>ORDER NUMBER</p>
								<p>PURCHASE DATE</p>
								<p>PURCHASE STATUS</p>
								<p>PRICE</p>
								<p>CARGO INFORMATION</p>
							</div>

							<?php foreach ($orders as $key => $val) { ?>
								<div class="item">
									<p><?=$val->id?></p>
									<p><?=dateparse($val->added_time)?></p>
									<p><?=admin_order_status($val->status)?></p>
									<p><?=number_format($val->price,2,',','.') ?> €</p>
									<p><?=$val->cargotext?></p>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
