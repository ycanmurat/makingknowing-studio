<?if(!defined('BASEPATH'))exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Kodakil - Cms
		</title>
		<meta name="description" content="General widget examples">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
		<!--begin::Base Styles -->
		<link href="<?=base_url('theme/')?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('theme/')?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('theme/')?>assets/css/custom.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('theme/')?>assets/app/media/img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('theme/')?>assets/app/media/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('theme/')?>assets/app/media/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('theme/')?>assets/app/media/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('theme/')?>assets/app/media/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('theme/')?>assets/app/media/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('theme/')?>assets/app/media/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('theme/')?>assets/app/media/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('theme/')?>assets/app/media/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?=base_url('theme/')?>assets/app/media/img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('theme/')?>assets/app/media/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('theme/')?>assets/app/media/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('theme/')?>assets/app/media/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?=base_url('theme/')?>assets/app/media/img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?=base_url('theme/')?>assets/app/media/img/favicon/ms-icon-144x144.png">
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header class="m-grid__item m-header"  data-minimize-mobile="hide" data-minimize-offset="200" data-minimize-mobile-offset="200" data-minimize="minimize" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="<?=site_url('Admin')?>" class="m-brand__logo-wrapper">
										<img src="<?=site_url('assets/Front/images/144.svg')?>" alt="Making Knowing" title="Making Knowing" style="max-width: 100px;max-height: 50px;">
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- END -->
									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>
						<!-- END: Brand -->
						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<!-- BEGIN: Horizontal Menu -->
							<!-- END: Horizontal Menu -->
							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light" data-dropdown-toggle="click" data-dropdown-persistent="true" id="m_quicksearch" data-search-type="dropdown">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon">
													<i class="flaticon-search-1"></i>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
												<div class="m-dropdown__inner ">
													<div class="m-dropdown__header">
														<form  class="m-list-search__form">
															<div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Menü Başlığı Arayın">
																</span>
																<span class="m-list-search__form-icon-close" id="m_quicksearch_close">
																	<i class="la la-remove"></i>
																</span>
															</div>
														</form>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
															<div class="m-dropdown__content"></div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
												<span class="m-nav__link-icon">
													<i class="flaticon-cogwheel"></i>
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(<?=base_url('theme/')?>assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
														<span class="m-dropdown__header-title">
															Ayarlar
														</span>
														<span class="m-dropdown__header-subtitle">
															Hızlı Adımlar
														</span>
													</div>
													<div class="m-dropdown__body m-dropdown__body--paddingless">
														<div class="m-dropdown__content">
															<div class="m-scrollable" data-scrollable="false" data-max-height="380" data-mobile-max-height="200">
																<div class="m-nav-grid m-nav-grid--skin-light">
																	<div class="m-nav-grid__row">
																		<!--<a href="<?=admin_url('Meta')?>" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-graphic-1"></i>
																			<span class="m-nav-grid__text">
																				Site Meta Tagları
																			</span>
																		</a>-->
																		<a href="<?=admin_url('Logout')?>" class="m-nav-grid__item">
																			<i class="m-nav-grid__icon flaticon-logout"></i>
																			<span class="m-nav-grid__text">
																				Sistemden Çıkış Yap
																			</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
					<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		data-menu-vertical="true"
		 data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
		>
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow">
							<li class="m-menu__item <?=$mainMenu=='Home'?'m-menu__item--active':''?>" aria-haspopup="true" >
								<a href="<?=admin_url()?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Anasayfa
											</span>
										</span>
									</span>
								</a>
							</li>
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Slider'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-tabs"></i>
									<span class="m-menu__link-text">
										Slider Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='SliderList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Slider')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Sliderları Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='SliderAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Slider/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Slider Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Menu'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-tabs"></i>
									<span class="m-menu__link-text">
										Menü Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='MenuList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Menu')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Menüleri Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='MenuAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Menu/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Menü Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Products'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-interface-4"></i>
									<span class="m-menu__link-text">
										İçerik Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='ProductsList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Products')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													İçerik Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='ProductsAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Products/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													İçerik Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>


							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Menu2'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-tabs"></i>
									<span class="m-menu__link-text">
										Ürün Kategori Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='MenuList2'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Menu2')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kategori Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='MenuAdd2'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Menu2/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kategori Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Products2'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-interface-4"></i>
									<span class="m-menu__link-text">
										Ürün Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='ProductsList2'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Products2')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Ürünleri Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='ProductsAdd2'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Products2/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Ürün Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<!--<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Campaign'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-tabs"></i>
									<span class="m-menu__link-text">
										Trend Ayarları
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='CampaignList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Campaign')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Trend Seç ve Listele
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>-->
							<!--<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='JobApp'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-technology-1"></i>
									<span class="m-menu__link-text">
										İş Başvuruları
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='JobAppList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/JobApp')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Başvuru Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='JobAppPositions'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/JobApp/positions')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Pozisyon Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>-->
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='News'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-interface-9"></i>
									<span class="m-menu__link-text">
										Çalışma Ortakları
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='NewsList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/News')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Çalışma Ortakları Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='NewsAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/News/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Çalışma Ortağı Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Information'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-notes"></i>
									<span class="m-menu__link-text">
										Blog Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='InformationList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Information')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Blogları Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='InformationAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Information/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Yeni Blog
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<!--<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Referances'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-notes"></i>
									<span class="m-menu__link-text">
										Anlaşmalı Şirket Ekle
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='ReferancesList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Referances')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Şirketleri Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='ReferancesAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Referances/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Şirket Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>-->
							<!--<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Statics'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-file"></i>
									<span class="m-menu__link-text">
										Sabit Sayfa Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='StaticsList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Statics')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Sabit Sayfaları Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='StaticsAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Statics/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Sabit Sayfa Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>-->
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Corporate'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-file"></i>
									<span class="m-menu__link-text">
										Kurumsal
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='CorporateUpdate'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Corporate')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Hakkımızda Düzenle
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='StatikCorporateUpdate'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a href="<?=site_url('Admin/Corporate/statik')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Anasayfa Arg Grup ve Kusursuz Hizmet
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<!--
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Faq'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-file-1"></i>
									<span class="m-menu__link-text">
										S.S.S Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='FaqAdd'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Faq/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Sıkça Sorulanlara Soru Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='FaqList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Faq')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Sıkça Sorulan Soruları Listele
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Slider_category_main'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-visible"></i>
									<span class="m-menu__link-text">
										Kategori Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='SliderCategoryList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Slider_category')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kategorileri Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='sliderCategoryAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Slider_category/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kategori Ekle
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='sliderContentAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Slider_category/contentAdd')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													İçerik Ekle
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='sliderContent'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Slider_category/contents')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													İçerikleri Listele
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>-->
							
							<li class="m-menu__item <?=$mainMenu=='Language'?'m-menu__item--active':''?>" aria-haspopup="true" >
								<a href="<?=admin_url('Language/statics/1')?>" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-speech-bubble-1"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Statik Alan Yönetimi
											</span>
										</span>
									</span>
								</a>
							</li>
							<!--<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Categorys'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-map"></i>
									<span class="m-menu__link-text">
										Kategori Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='CategorysList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Categorys')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kategorileri Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='CategorysAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Categorys/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Kategori Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>-->
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Galery'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-time-2"></i>
									<span class="m-menu__link-text">
										Servis Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='GaleryList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Galery')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Başlıkları Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='GaleryAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Galery/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Başık Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='VideoList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Video')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													İçerik Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='VideoAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Video/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													İçerik Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='photoList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Galery/photoList')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Fotoğraf Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='photoAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Galery/photoAdd')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Fotoğraf Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='pdfList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Galery/pdfList')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													PDF Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='pdfAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Galery/pdfAdd')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													PDF Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Comment'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-visible"></i>
									<span class="m-menu__link-text">
										Referans Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='CommentList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Comment')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Referansları Listele
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='CommentAdd'?'m-menu__item--active':'')?>" aria-haspopup="true" >
											<a href="<?=site_url('Admin/Comment/add')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Referans Ekle
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="m-menu__item  m-menu__item--submenu  <?=($mainMenu=='Contact'?'m-menu__item--open m-menu__item--expanded':'')?>" aria-haspopup="true" id="m_variant" data-menu-submenu-toggle="hover">
								<a  href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-notes"></i>
									<span class="m-menu__link-text">
										Form Listesi Yönetimi
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='ContactList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Contact')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Formdan Gelenleri Listele
												</span>
											</a>
										</li>
										<!--<li class="m-menu__item <?=($subMenu=='DateList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Contact/date')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Randevu Talepleri
												</span>
											</a>
										</li>
										<li class="m-menu__item <?=($subMenu=='OfferList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Contact/date_offer')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Teklif Talepleri
												</span>
											</a>
										</li>-->
										<!--<li class="m-menu__item <?=($subMenu=='Calllist'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Calllist')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Aranacakları Listele
												</span>
											</a>
										</li>-->
									</ul>
								</div>
								<!--<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item <?=($subMenu=='BulletinList'?'m-menu__item--active':'')?>" aria-haspopup="true">
											<a  href="<?=site_url('Admin/Contact/bulletin')?>" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Email Bülteni Listesi
												</span>
											</a>
										</li>
									</ul>
								</div>-->
							</li>
						</ul>
					</div>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">