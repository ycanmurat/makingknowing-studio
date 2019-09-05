<div class="col-md-12">
	<div class="accountMenu">
		<ul>

            <li><a <?=$step == 1?'class="active"':''?> href="<?=site_url('account')?>">Settings</a></li>
            <li><a <?=$step == 2?'class="active"':''?> href="<?=site_url('account/orders')?>">Orders</a></li>
            <li><a <?=$step == 4?'class="active"':''?>href="<?=site_url('account/address')?>">Addresses</a></li>
            <li><a href="<?=site_url('log-out')?>">Logout</a></li>
		</ul>
	</div>
</div>