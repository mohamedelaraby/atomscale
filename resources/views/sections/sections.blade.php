@extends('layouts.index')
@section('title')
{{ trans('admin.sections') }}
@stop

@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{ trans('admin.settings') }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ trans('admin.sections') }}</span>
						</div>
					</div>
				
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
				
					<div class="col-xl-12">
						@include('layouts.messages')
					</div>
				
					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">{{ trans('admin.invoices') }}</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							
							<div class="card-body">
								<div class="table-responsive">

									<div class="col-sm-3 col-md-3 col-xl-3 mb-3">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#addnewsection">{{ trans('admin.addsection') }}</a>
									</div>
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
											
												<th class="border-bottom-0">#</th>
												<th class="border-bottom-0">{{ trans('admin.sections_name') }}</th>
												<th class="border-bottom-0">{{ trans('admin.description') }}</th>
												<th class="border-bottom-0">{{ trans('admin.options') }}</th>
				
											</tr>
										</thead>
										<tbody>
											@foreach($sections as $section)
												
											<tr>
												<td>{{ $section->id }}</td>
												<td>{{ $section->name }}</td>
												<td>{{ $section->description }}</td>
												
												<td>61</td>
												
											</tr>
											
											@endforeach
										
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

				
		<!-- Basic modal -->
		<div class="modal" id="addnewsection">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">{{ trans('admin.addsection') }}</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					
					<div class="modal-body">
						
						<form action="{{ route('admins.sections.store') }}" method="POST">
						@csrf
						{{-- section name --}}
						<div class="form-group">
							<label for="sectionname">{{ trans('admin.sections_name') }}</label><br>
							<input type="text" name="name" class='form-control' id="" placeholder="{{ trans('admin.entersectionname') }}"> 
						</div>	

						{{-- section description --}}
						<div class="form-group">
							<label for="sectiondescription">{{ trans('admin.description') }}</label><br>
							<input type="text" name="description" class='form-control' id="" placeholder="{{ trans('admin.entersectiondescription') }}"> 
						</div>	
						
						{{-- section notes --}}
						<div class="form-group">
							<label for="notes">{{ trans('admin.notes') }}</label><br>
							<input type="text" name="notes" class='form-control' id="" placeholder="{{ trans('admin.entersectionnotes') }}"> 
						</div>					
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="submit">{{ trans('admin.save') }}</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">{{ trans('admin.close') }}</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		<!-- End Basic modal -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
