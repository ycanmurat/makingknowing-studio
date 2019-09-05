<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
	<!-- Jquery -->
	<script src="<?=site_url('assets/Front/')?>js/jquery-3.5.1.min.js"></script>
	<!-- Gallery (Fancy) -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!--! Bootstrap 5 İncluded Files !-->
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/main.css">
	<!-- Card -->
	<script src="<?=site_url('assets/Front/')?>js/card.js"></script>
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=site_url('assets/Front/')?>css/owl.theme.default.min.css">
	<script src="<?=site_url('assets/Front/')?>js/owl.carousel.min.js"></script>
	<link rel="icon" href="<?=site_url('assets/Front/')?>images/omfavico.png" type="image/x-icon" />
	<meta name="p:domain_verify" content="7286d36a2223fa0faae9744f05b4c2ec"/>
	<script type="text/javascript">
		
		function createCookie(name,value,days) {
			if (days) {
				var date = new Date();
				date.setTime(date.getTime()+(days*24*60*60*1000));
				var expires = "; expires="+date.toGMTString();
			}
			else var expires = "";
			document.cookie = name+"="+value+expires+"; path=/";
		}

		function readCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for(var i=0;i < ca.length;i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
			}
			return null;
		}

		function eraseCookie(name) {
			createCookie(name,"",-1);
		}
	</script>

	<title>OZGUR MASUR</title>
</head>
<body>
	<div class="loading">
		<p>Yükleniyor</p>
	</div>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="<?=site_url()?>" class="logo">
						<img style="width: 85%;margin:auto;" src="<?=site_url('assets/Front/')?>images/omlogofinal.png" alt="Özgür Masur">
					</a>
					<div class="menu">
						<div class="hamburger">
							<svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
								<path
								class="line top"
								d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
								<path
								class="line middle"
								d="m 30,50 h 40" />
								<path
								class="line bottom"
								d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
							</svg>
						</div>
						<ul>
							<li><a href="javascript:void(0)">NEWS</a>
								<div class="megaMenu">
									<div class="news">
										<a href="<?=site_url('press')?>">
											<h4>basın</h4>
											<img src="<?=main_url($newsMenu->image)?>" alt="Özgür Masur Haberleri">
										</a>
										<a href="<?=site_url('communique')?>">
											<h4>sosyal medya</h4>
											<img src="<?=main_url($newsMenu->image2)?>" alt="">
										</a>
									</div>
								</div>
							</li>
							<li><a href="<?=site_url('collections')?>">KOLEKSİYON</a>
								<div class="megaMenu collections">
									<div class="Area">
										<?php foreach ($collections as $key => $val) { ?>
											<div class="item">
												<h2><?=$val->category_title_tr?></h2>
												<div class="imgArea">
													<a href="<?=site_url('collections/'.$val->slug.'/'.$val->Id)?>"><img src="<?=main_url($val->image)?>" alt="<?=$val->category_title_tr?>"></a>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</li>
							<li><a id="shopLink" href="javascript:void(0);">SHOP</a><!-- <?=site_url('shop')?> -->
								<div class="megaMenu">
									<?php foreach ($categories as $key => $val) { ?>
										<div class="category">
											<div class="Area">
												<div class="item">
													<h2><a href="<?=site_url('category/'.$val->tr_slug.'/'.$val->id)?>"><?=$val->tr_name?></a></h2>
													<div class="Area">
														<div class="wrapper">
															<div class="imgArea">
																<a href="javascript:void(0);"><img src="<?=main_url($val->default_image)?>" alt="<?=$val->tr_name?>" title="<?=$val->tr_name?>" ></a><!-- <?=site_url('category/'.$val->tr_slug.'/'.$val->id)?> -->
															</div>
														</div>
														<div class="wrapper">
															<ul>
																<?php foreach ($val->sub as $key2 => $val2) { ?>
																	<li><a href="<?=site_url('category/'.$val2->tr_slug.'/'.$val2->id)?>"><?=$val2->tr_name?></a></li>
																<?php } ?>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
							</li>
							<li><a href="<?=site_url('about')?>">OZGUR MASUR</a></li>
							<li class="wrapper">
								<div class="search">
									<img src="<?=site_url('assets/Front/')?>images/icons/search.svg">
									<img src="<?=site_url('assets/Front/')?>images/icons/cancel.svg">
									<form action="<?=site_url('search')?>" method="get">
										<input name="k" type="search" placeholder="ürün arama..">
										<button type="submit">ara</button>
									</form>
								</div>
								<div class="user">
									<?php if ($user) { ?>
										<a href="<?=site_url('account')?>"><img src="<?=site_url('assets/Front/')?>images/icons/user.svg"></a>
										<ul class="userDropdown">
											<li><a href="<?=site_url('account')?>">Hesabım</a></li>
											<li><a href="<?=site_url('account/orders')?>">Siparişlerim</a></li>
											<li><a href="<?=site_url('log-out')?>">Çıkış Yap</a></li>
										</ul>
									<?php }else{ ?>
										<a href="<?=site_url('login')?>"><img src="<?=site_url('assets/Front/')?>images/icons/user.svg"></a>
									<?php } ?>
								</div>
								<?php $total = 0; ?>
								<div class="cart">
									<img src="<?=site_url('assets/Front/')?>images/icons/shopping-bag.svg">
									<span class="count"><?=$this->cart->total_items()?></span>
									<div class="shoppingCart">
										<h4>Sepetim <b>(<?=$this->cart->total_items()?>)</b></h4>
										<div class="wrapper cartWrapper">
											<?php if ($this->cart->contents() == array()) { ?>
												<div class="blank-item">
													<img src="<?=site_url('assets/Front/images/icons/shopping-bag.svg')?>">
													<p>boş</p>
												</div>
											<?php }else{ ?>
												<?php foreach ($this->cart->contents() as $key => $val) { ?>
													<?php $total += $val['price_tr']*$val['qty'] ?>
													<div class="item">
														<img src="<?=$val['image']?>">
														<div class="productInfos">
															<h2><?=$val['name']?></h2>
															<h3><?=number_format($val['price_tr'],2,',','.')?> ₺</h3>
															<div class="selection">
																<?php for ($i=1; $i < 5; $i++) { 
																	if ($i <= $val['options']['colorDetail']->rules) { ?> 
																		<?php $var = 'color'.$i; ?>
																		<span style="background-color:<?=$val['options']['colorDetail']->{$var}?>"></span>
																	<?php }
																} ?>
																<span><?=$val['options']['size']?></span>
															</div>
														</div>
														<button onclick="productDeleteToCart('<?=$key?>')"><img src="<?=site_url('assets/Front/')?>images/icons/cancel.svg"></button>
													</div>
												<?php } ?>
											<?php } ?>
										</div>
										<div class="cartFooter">
											<p>toplam : <b><?=number_format($total,2,',','.')?> ₺</b></p>
											<a href="<?=site_url('cart')?>">sepete git</a>
											<a href="<?=site_url('cart/shopping')?>">alışverişe devam et</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="mobileArea"><ul></ul></div>
				</div>
			</div>
		</div>
	</header>
	<span id="overlay"></span>
	<a class="whatsapp-message" href="https://api.whatsapp.com/send?phone=90555 000 00 00&text=Merhaba">
		<img src="https://hakaanyildirim.com/assets/Front/images/icons/whatsappicon.svg" alt="Özgür Masur Whatsapp" title="Whatsapp Contact">
	</a>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
			$('div.menu li a').mouseenter(function() {
				$(this).parent('li').find('.megaMenu').addClass('active');
			});
			$('div.menu li').mouseleave(function() {
				$(this).find('.megaMenu').removeClass('active');
			});
			$('li.wrapper div.search img').click(function(event) {
				$(this).parent('div.search').toggleClass('active');
			});
		});
		if ($(window).width() < 768) {
			$('ul li.wrapper').clone().appendTo('.mobileArea ul');
			$('div.menu li.wrapper').hide();
			$('div.menu ul li').click(function(event) {
				$(this).find('div.megaMenu').toggleClass('mblActive');
			});
			$('header .collections').parent('li').children('a').attr('href','javascript:void(0);');
			$('#shopLink').attr('href','javascript:void(0);');
		}
		$('.hamburger').click(function(event) {
			$('div.menu ul').toggleClass('active');
			$('span#overlay').addClass('active');
		});
		$('span#overlay').click(function(event) {
			$(this).removeClass('active');
			$('div.menu ul').toggleClass('active');
			$('.hamburger .ham').removeClass('active');
		});
		$(window).resize(function() {
			if ($(window).width() < 768) {
				$('.mobileArea').show();
				$('div.menu li.wrapper').hide();

			}
			else {
				$('.mobileArea').hide();
				$('div.menu li.wrapper').show();
			}
		});
	</script>