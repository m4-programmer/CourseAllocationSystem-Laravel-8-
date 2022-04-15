
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
						<a href="#">Manage Courses</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">View Courses</a>
					</li>
				</ul>
			</div>
			<!-- Table content for Courses  Start-->
			<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">View Courses</h4>
										<a class="btn btn-primary btn-round ml-auto" href="{{url('admin/add_courses')}} ">
											<i class="fa fa-plus"></i>
											Add Courses
										</a>
									</div>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>S/N</th> 
													<th>Course Name(Short)</th>
													<th>Course Name(Full)</th>
													<th>Unit Load</th>
													<th>Time Created</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>S/N</th>
													<th>Course Name(Short)</th>
													<th>Course Name(Full)</th>
													<th>Unit Load</th>
													<th>Time Created</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
												@foreach($course as $courses)
												<tr>
													<td>1</td>
													<td>{{$courses->course_no}}</td>
													<td>{{$courses->course_subject}}</td>
													<td>{{$courses->unit_load}}</td>
													<td>{{$courses->created_at}}</td>
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
@endsection('content')