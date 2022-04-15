@extends("layouts.master")

@section("content")
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">{{Auth::user()->name }} Dashboard</h2>
								<h5 class="text-white op-7 mb-2">Computer Science Lecturer Dashboard</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Overall statistics</div>
									<div class="card-category">overall information about statistics in system</div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">Total Students</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Total Lecturers</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Total Specializations</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Response Tickets</div>
										<div class="card-tools">
											<ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
												<li class="nav-item">
													<a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Today</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">Week</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">Month</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body">
									@if ($complains->count())
									@foreach($complains as $row)
									<div class="d-flex">
										<div class="avatar avatar-online">
											<span class="avatar-title rounded-circle border border-white bg-info">J</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">{{$row->user->name}} </h6>
											<span class="text-muted">{{$row->message}}</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">{{$row->created_at}}</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									@endforeach
									@else
									<div class="d-flex">
									<div class="avatar avatar-online">
											<span class="avatar-title rounded-circle border border-white bg-info">NO</span>
										</div>
									<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">There is no complain or message Yet </h6>
											<span class="text-muted">Currently you have not made any complain yet</span>
										</div>
									</div>
									@endif
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>

@endsection
