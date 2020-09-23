@extends('basic')

@section('content')
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									{{session('title')}} 
								</h3>

								
							</div>
							<div>
							
									
								 <form method='post' action='{{route('get_stats')}}'>
								 	@csrf
								 	<div class=" row">
								 		
								 			<div class="input-group m-input-group col-lg-5">
													<div class="input-group-prepend">
														<span class="input-group-text">
															Start Date:
														</span>
													</div>
													<input type="text" class="form-control m-input" id="start_date" readonly="" placeholder="Select date" name="start_date" required="">
											</div>
								 			<div class="input-group m-input-group col-lg-5">
													<div class="input-group-prepend">
														<span class="input-group-text">
															End Date:
														</span>
													</div>
													<input type="text" class="form-control m-input" id="end_date" readonly="" placeholder="Select date" name="end_date" required="">
											</div>
								 		
								 		
								 		<div class="col-lg-2 text-right">
	    									<input type='submit' value='Filter' class="btn btn-primary btn-lg">
								 		</div>
								 	</div>
								 	
   								</form>
							
								
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-xl-4">
								<div class="m-portlet m-portlet--skin-dark m-portlet--bordered-semi m--bg-brand">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-statistics"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Total Profit
												</h3>
											</div>
										</div>
										
									</div>
									<div class="m-portlet__body">
										<h1>{{number_format($total_profit)}}</h1>
									</div>
								</div>
								<div class="m-portlet m-portlet--skin-dark m-portlet--bordered-semi m--bg-success">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-statistics"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Number of Sales
												</h3>
											</div>
										</div>
										
									</div>
									<div class="m-portlet__body">
										<h1>{{ number_format($orders->count())}}</h1>
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<!--begin:: Widgets/Sale Reports-->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Top 5 Profitable ItemTypes
												</h3>
											</div>
										</div>
										
									</div>
									<div class="m-portlet__body">
										<!--Begin::Tab Content-->
										<div class="tab-content">
											<!--begin::tab 1 content-->
											<div class="tab-pane active" id="m_widget11_tab1_content">
												<!--begin::Widget 11-->
												<div class="m-widget11">
													<div class="table-responsive">
														<!--begin::Table-->
														@if(count($top_items) > 0)
														<table class="table">
															<!--begin::Thead-->
															<thead>
																<tr>
																	<td class="m-widget11__label">
																		#
																	</td>
																	<td class="m-widget11__app">
																		Item type
																	</td>
																	
																	
																	<td class="m-widget11__total m--align-right">
																		Total Profit
																	</td>
																</tr>
															</thead>
															<!--end::Thead-->
							<!--begin::Tbody-->
															<tbody>
																
																@php $counter = 1 @endphp
																@foreach($top_items as $top)


																<tr>
																	<td>
																		{{$counter++}}
																	</td>
																	<td>
																		<span class="m-widget11__title">
																			{{$top->item_type}}
																		</span>
																		
																	</td>
																	
																	
																	<td class="m--align-right m--font-brand">
																		{{number_format($top->sum)}}
																	</td>
																</tr>
																@endforeach
																
																
															</tbody>
															<!--end::Tbody-->
														</table>
														<!--end::Table-->
														@else
														<div class="text-center">
															<span class="text-center text-primary"> No item types found</span>
														</div>

																
														@endif
													</div>
													
												</div>
												<!--end::Widget 11-->
											</div>
											<!--end::tab 1 content-->
			<!--begin::tab 2 content-->
											<div class="tab-pane" id="m_widget11_tab2_content">
												<!--begin::Widget 11-->
												<div class="m-widget11">
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table">
															<!--begin::Thead-->
															<thead>
																<tr>
																	<td class="m-widget11__label">
																		#
																	</td>
																	<td class="m-widget11__app">
																		Application
																	</td>
																	<td class="m-widget11__sales">
																		Sales
																	</td>
																	<td class="m-widget11__change">
																		Change
																	</td>
																	<td class="m-widget11__price">
																		Avg Price
																	</td>
																	<td class="m-widget11__total m--align-right">
																		Total
																	</td>
																</tr>
															</thead>
															<!--end::Thead-->
							<!--begin::Tbody-->
															<tbody>
																<tr>
																	<td>
																		<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</td>
																	<td>
																		<span class="m-widget11__title">
																			Loop
																		</span>
																		<span class="m-widget11__sub">
																			CRM System
																		</span>
																	</td>
																	<td>
																		19,200
																	</td>
																	<td>
																		$63
																	</td>
																	<td>
																		$11,300
																	</td>
																	<td class="m--align-right m--font-brand">
																		$34,740
																	</td>
																</tr>
																<tr>
																	<td>
																		<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</td>
																	<td>
																		<span class="m-widget11__title">
																			Selto
																		</span>
																		<span class="m-widget11__sub">
																			Powerful Website Builder
																		</span>
																	</td>
																	<td>
																		24,310
																	</td>
																	<td>
																		$39
																	</td>
																	<td>
																		$14,700
																	</td>
																	<td class="m--align-right m--font-brand">
																		$46,010
																	</td>
																</tr>
																<tr>
																	<td>
																		<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</td>
																	<td>
																		<span class="m-widget11__title">
																			Jippo
																		</span>
																		<span class="m-widget11__sub">
																			The Best Selling App
																		</span>
																	</td>
																	<td>
																		9,076
																	</td>
																	<td>
																		$105
																	</td>
																	<td>
																		$8,400
																	</td>
																	<td class="m--align-right m--font-brand">
																		$67,800
																	</td>
																</tr>
																<tr>
																	<td>
																		<label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
																			<input type="checkbox">
																			<span></span>
																		</label>
																	</td>
																	<td>
																		<span class="m-widget11__title">
																			Verto
																		</span>
																		<span class="m-widget11__sub">
																			Web Development Tool
																		</span>
																	</td>
																	<td>
																		11,094
																	</td>
																	<td>
																		$16
																	</td>
																	<td>
																		$12,500
																	</td>
																	<td class="m--align-right m--font-brand">
																		$18,520
																	</td>
																</tr>
															</tbody>
															<!--end::Tbody-->
														</table>
														<!--end::Table-->
													</div>
													<div class="m-widget11__action m--align-right">
														<button type="button" class="btn m-btn--pill btn-outline-brand m-btn m-btn--custom">
															Generate Report
														</button>
													</div>
												</div>
												<!--end::Widget 11-->
											</div>
											<!--end::tab 2 content-->
			<!--begin::tab 3 content-->
											<div class="tab-pane" id="m_widget11_tab3_content"></div>
											<!--end::tab 3 content-->
										</div>
										<!--End::Tab Content-->
									</div>
								</div>
								<!--end:: Widgets/Sale Reports-->
							</div>
							
						</div>
						
					</div>
				</div>
				
			</div>

			<script type='text/javascript'>
   $(document).ready(function(){
     $('#start_date').datepicker({
       
     });
     $('#end_date').datepicker({
       
     });
   });

   </script>

@endsection