<!DOCTYPE html>

<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			{{session('title')}} | Ben Sekyondwa
		</title>
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
        <!--begin::Page Vendors -->
		<!--end::Page Vendors -->
		<link href="/css/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/css/datatables.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Base Styles -->
		<link rel="shortcut icon" href="/favicon.ico" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
			 		<!-- jQuery Library -->
    	<script src="/js/jquery.min.js" type="text/javascript"></script>
     	<script src="/js/jquery-ui.min.js" type="text/javascript"></script>
	
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- begin::Header -->
			<header id="m_header" class="m-grid__item		m-header "  m-minimize="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200" >
				<div class="m-header__top">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Brand -->
							<div class="m-stack__item m-brand">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="index.html" class="m-brand__logo-wrapper">
											<img alt="" src="/logo.png"/>
										</a>
									</div>
								</div>
							</div>
							<!-- end::Brand -->	
						</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
									<i class="la la-close"></i>
								</button>
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item {{(strpos(Route::currentRouteName(), 'dashboard') == 0) ? 'active' : ''}} "  aria-haspopup="true">
											<a  href="/" class="m-menu__link ">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Dashboard
												</span>
											</a>
										</li>
										<li class="m-menu__item {{(strpos(Route::currentRouteName(), 'reports') == 0) ? 'active' : ''}} "  aria-haspopup="true">
											<a  href="/reports" class="m-menu__link ">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Reports
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- end::Horizontal Menu -->	
				
						</div>
					</div>
				</div>
			</header>
			<!-- end::Header -->		
		<!-- begin::Body -->
			@yield('content')
			<!-- end::Body -->
<!-- begin::Footer -->
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									2020 &copy; Reporting tool by
									<a href="#" class="m-link">
										Ben Sekyondwa
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->        
	    <!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->	
	
    	<!--begin::Base Scripts -->
		<script src="/js/vendors.bundle.js" type="text/javascript"></script>
		<script src="/js/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
        <!--begin::Page Snippets -->
		<script src="/js/dashboard.js" type="text/javascript"></script>
		<!--end::Page Snippets -->

		<script src="/js/datatables.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->  
        <!--begin::Page Resources -->
		<script src="/js/basic.js" type="text/javascript"></script>
		<script src="/js/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="/js/bootstrap-daterangepicker.js" type="text/javascript"></script>


		
	</body>
	<!-- end::Body -->
</html>
