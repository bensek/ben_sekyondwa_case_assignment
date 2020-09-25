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
							
									
								 <form method='post' action='{{route('get_stats')}}' novalidate="novalidate" class="m-form ">
								 	@csrf
								 	<div class=" row">
								 		
								 			<div class="input-group m-input-group col-lg-5">
													<div class="input-group-prepend">
														<span class="input-group-text">
															Start Date:
														</span>
													</div>
													<input type="text" class="form-control m-input" id="start_date" readonly="" placeholder="Select date" name="start_date" required="" value="01/01/2010">
											</div>
								 			<div class="input-group m-input-group col-lg-5">
													<div class="input-group-prepend">
														<span class="input-group-text">
															End Date:
														</span>
													</div>
													<input type="text" class="form-control m-input" id="end_date" readonly="" placeholder="Select date" name="end_date" required="" value="12/30/2019">
											</div>
								 		
								 		
								 		<div class="col-lg-2 text-right">
								 			<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" onclick="get_stats()">
															<span>
																<i class="fa fa-filter"></i>
																<span>
																	Filter
																</span>
															</span>
														</a>
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
												<h3 class="m-portlet__head-text" >
													Total Profit
												</h3>
											</div>
										</div>
										
									</div>
									<div class="m-portlet__body">
										<h1 id="total_profit">
										0																	
										</h1>
									</div>
								</div>
								<div class="m-portlet m-portlet--skin-dark m-portlet--bordered-semi m--bg-success">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-cart"></i>
												</span>
												<h3 class="m-portlet__head-text" >
													Number of Sales
												</h3>
											</div>
										</div>
										
									</div>
									<div class="m-portlet__body" >
										<h1 id="total_sales">
											0
										</h1>
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
																
																
																
																
															</tbody>
															<!--end::Tbody-->
														</table>
														<!--end::Table-->
														
													</div>
													
												</div>
												<!--end::Widget 11-->
											</div>
											<!--end::tab 1 content-->
		
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

   	 get_stats();

     $('#start_date').datepicker({
       
     });
     $('#end_date').datepicker({
       
     });


     
   });

   function get_stats(){

   		 var start_date =  $("#start_date").val(); 
   		 var end_date = $("#end_date").val();

		 $.post('get_stats', 
		 	{ start_date: start_date, end_date : end_date}, 
		    function(data){
	           console.log(data);

	           $("#total_profit").text(data['total_profit']);
	           $("#total_sales").text(data['total_sales']);

			    var table = $(".table tbody");
			    $(".table tr").remove();
			    $.each(data['top_items'], function(idx, elem){
			        table.append("<tr><td>"+ elem.counter +"</td><td class='m-widget11__title'>"+elem.item_type+"</td>   <td class='m--align-right m--font-brand'>"+elem.sum+"</td></tr>");
			    });
	       
		});
    }

   </script>

@endsection