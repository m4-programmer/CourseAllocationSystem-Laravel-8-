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
								<a href="#">Users</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Students</a>
							</li>
						</ul>
					</div>
					<!-- to call up error log from modal using an alert box -->
					<!-- Table content Start-->
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Students</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Students
										</button>
									</div>
								</div>
								<div class="card-body">
									@error('name')
										{{$message}}
									@enderror
									@error('email')
										{{$message}}
									@enderror
									@error('username')
										{{$message}}
									@enderror
									@error('password')
										{{$message}}
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
												@foreach($user as $users)
												<tr>
													<td>{{$users->name}}</td>
													<td>{{$users->email}}</td>
													<td>{{$users->username}}</td>
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
													<form method="POST" action="{{Route('addStudent')}}" >
														@csrf
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Name</label>
																	<input id="addName" name="name" type="text" class="form-control" value="{{ old('name') }}" placeholder="fill name">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Email</label>
																	<input id="addEmail" name="email" type="text" class="form-control" value="{{ old('email') }}" placeholder="Enter Student Email">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Username</label>
																	<input id="addUsername" name="username" value="{{ old('username') }}" type="text" class="form-control" placeholder="Enter Student Username">
																</div>
															</div>
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Password</label>
																	<input id="addPassword" name="password" type="text" class="form-control"  placeholder="Enter Student Password">
																</div>
															</div>
														</div>
													
												</div>
												<div class="modal-footer no-bd">
													<button type="submit"  id="addRowButton" class="btn btn-primary">Add</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
												</form>
											</div>
										</div>
									</div>
		@endsection('content')