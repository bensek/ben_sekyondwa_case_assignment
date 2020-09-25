@extends('basic')

@section('content')
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<div class="mr-auto">
								<h3 class="m-subheader__title">
									{{session('title')}}
								</h3>
								
							</div>
								
							</div>
							<div>
							<div class="row">
									
								
								<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" data-toggle="modal" data-target="#m_modal_4">
															<span>
																<i class="la la-plus"></i>
																<span>
																	Import Report
																</span>
															</span>
								</a>
							</div>
								
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-12">
								<!--begin::Portlet-->
								<div class="m-portlet " id="m_portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-cart"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Sales
												</h3>
											</div>
										</div>

									</div>
									<div class="m-portlet__body">
										@if(Session::has('message'))
                                    	<div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible mb-4" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            {{ Session::get('message') }}
                                        </div>
										@endif
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
											<th>{{$order->order_date->format('m/d/y')}}</th>
											<th>{{$order->priority}}</th>
											<th>{{number_format($order->units_sold)}}</th>
											<th>{{$order->unit_price}}</th>
											<th>{{number_format($order->total_cost, 2, '.', ',')}}</th>
											<th>{{number_format($order->total_revenue, 2, '.', ',')}}</th>
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
												<input type="file" class="custom-file-input" id="customFile" name="file" required="">
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
			<script type="text/javascript">
			jQuery(document).ready(function(){
					$("#datatable").DataTable();
            	});

		</script>

@endsection