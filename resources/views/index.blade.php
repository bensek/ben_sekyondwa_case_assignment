
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Ben Sekyondwa
		</title>
		<meta name="description" content="Latest updates and statistic charts">
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
										<li class="m-menu__item  m-menu__item--active "  aria-haspopup="true">
											<a  href="index.html" class="m-menu__link ">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Dashboard
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
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Dashboard
								</h3>
							</div>
							<div>
							<form class="m-form m-form--fit m-form--label-align-right">

								<div class="form-group m-form__group row">
										
									<div class="input-group" id="daterangepicker">
										<input type="text" class="form-control m-input" readonly="" placeholder="Select date range">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="la la-calendar-check-o"></i>
											</span>
										</div>
										</div>
									</div>

								</form>
								
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<!--Begin::Section-->
						<div class="m-portlet">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-xl-4">
										<!--begin:: Widgets/Daily Sales-->
										<div class="m-widget14">
											<div class="m-widget14__header m--margin-bottom-30">
												<h3 class="m-widget14__title">
													Daily Sales
												</h3>
												<span class="m-widget14__desc">
													Check out each collumn for more details
												</span>
											</div>
											<div class="m-widget14__chart" style="height:120px;">
												<canvas  id="m_chart_daily_sales"></canvas>
											</div>
										</div>
										<!--end:: Widgets/Daily Sales-->
									</div>
									<div class="col-xl-4">
										<!--begin:: Widgets/Profit Share-->
										<div class="m-widget14">
											<div class="m-widget14__header">
												<h3 class="m-widget14__title">
													Profit Share
												</h3>
												<span class="m-widget14__desc">
													Profit Share between customers
												</span>
											</div>
											<div class="row  align-items-center">
												<div class="col">
													<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
														<div class="m-widget14__stat">
															45
														</div>
													</div>
												</div>
												<div class="col">
													<div class="m-widget14__legends">
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-accent"></span>
															<span class="m-widget14__legend-text">
																37% Sport Tickets
															</span>
														</div>
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-warning"></span>
															<span class="m-widget14__legend-text">
																47% Business Events
															</span>
														</div>
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-brand"></span>
															<span class="m-widget14__legend-text">
																19% Others
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end:: Widgets/Profit Share-->
									</div>
									<div class="col-xl-4">
										<!--begin:: Widgets/Support Stats-->
										<div class="m-widget1">
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															IPO Margin
														</h3>
														<span class="m-widget1__desc">
															Awerage IPO Margin
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-focus">
															+24%
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Payments
														</h3>
														<span class="m-widget1__desc">
															Yearly Expenses
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-accent">
															+$560,800
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Logistics
														</h3>
														<span class="m-widget1__desc">
															Regional Logistics
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-info">
															-10%
														</span>
													</div>
												</div>
											</div>
										</div>
										<!--end:: Widgets/Support Stats-->
									</div>
								</div>
							</div>
						</div>
						<!--End::Section-->
<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-12">
								<!--begin::Portlet-->
								<div class="m-portlet " id="m_portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-map-location"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Sales
												</h3>
											</div>
										</div>

									
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item">
													<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" data-toggle="modal" data-target="#m_modal_4">
														<span>
															<i class="la la-plus"></i>
															<span>
																Import
															</span>
														</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div id="m_table_1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12">

									<table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">

									<thead>
										<tr role="row">
											<th>Order Date</th>
											<th>Order Priority</th>
											<th>Units Sold</th>
											<th>Unit Price</th>
											<th>Total Cost</th>
											<th>Total Revenue</th>
											<th>Item Type</th>
										</tr>
									</thead>
									<tbody>
										@foreach($orders as $order)
										<tr role="row">
											<th>{{$order->order_date}}</th>
											<th>{{$order->priority}}</th>
											<th>{{$order->units_sold}}</th>
											<th>{{$order->unit_price}}</th>
											<th>{{$order->total_cost}}</th>
											<th>{{$order->total_revenue}}</th>
											<th>{{$order->item_type}}</th>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
						</div>
						</div>
					</div>
								<!--end::Portlet-->
							</div>
						</div>
						<!--End::Section-->
					</div>
				</div>
				<!-- begin:: Import Modal -->
				<div class="modal fade show" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">
											New Upload
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												×
											</span>
										</button>
									</div>
									<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                							@csrf
									<div class="modal-body">
										 
											<label for="recipient-name" class="form-control-label">
													Select CSV file:
												</label>
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="customFile" name="file">
												<label class="custom-file-label" for="customFile">
													Choose file
												</label>
											</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">
											Close
										</button>
										<button type="submit" class="btn btn-primary">
											Upload
										</button>
									</div>
									</form>
								</div>
							</div>
						</div>
				<!-- end:: Import Modal -->
			</div>
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
		 		<!-- jQuery Library -->
    	<script src="/js/jquery.min.js" type="text/javascript"></script>
     	<script src="/js/jquery-ui.min.js" type="text/javascript"></script>
	
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
		<script src="/js/bootstrap-daterangepicker.js" type="text/javascript"></script>


		<script type="text/javascript">
			jQuery(document).ready(function(){
					$("#datatable").DataTable();
					$("#daterangepicker").daterangepicker();
            	});

		</script>
	</body>
	<!-- end::Body -->
</html>
