
@extends('layouts.master')

@section('content')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
					
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="#">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">Specializations</a>
					</li>
					
				</ul>
			</div>
			<!-- Table content for Courses  Start-->
			<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Specialization</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Specialization
										</button>
									</div>
								</div>
								<div class="card-body">
								
										@error('specialization')
                                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
	

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											
											<thead>
												<tr>
													<!-- <th>S/N</th> -->
													<th>Name</th>
													<th>Email</th>
													<th>Username</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<!-- <th>S/N</th> -->
													<th>Name</th>
													<th>Email</th>
													<th>Office</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
												@foreach($specialization as $row)
												<tr>
													<td>{{$row->specialization}}</td>
													<td>asd</td>
													<td>asd</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
																<i class="fa fa-times"></i>
															</button>
														</div>
													</td>
												</tr>
													@endforeach
												
												
											</tbody>
										</table>
										
										
										
									</div>
								</div>
							</div>
						</div>
	</div>
</div>

<!-- Modal Content-->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header no-bd">
			<h5 class="modal-title">
				<span class="fw-mediumbold">
				New</span> 
				<span class="fw-light">
					Row
				</span>
			</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<p class="small">Create a new student using this form, make sure you fill them correctly</p>
			<form method="POST" action="{{Route('special')}}" >
				@csrf
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group form-group-default">
							<label>Specialization</label>
							<input id="addSpecialization" name="specialization" type="text" class="form-control" value="{{ old('Specialization') }}" placeholder="fill Specialization">
						</div>
					</div>
				
					
				</div>
			
		</div>
		<div class="modal-footer no-bd">
			<button type="submit"  id="addSpecialization" class="btn btn-primary">Add</button>
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
		</form>
	</div>
</div>
</div>
@endsection('content')
