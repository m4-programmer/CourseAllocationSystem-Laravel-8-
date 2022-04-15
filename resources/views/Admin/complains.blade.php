
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
						<a href="#">View Complains</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					
				</ul>
			</div>

			<!-- Add courses content -->
			<div class="col-md-12">
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
										<div class="avatar ">
											<span class="avatar-title rounded-circle border border-white bg-info">J</span>
										</div>
										<div class="flex-1 ml-3 pt-1">
											<h6 class="text-uppercase fw-bold mb-1">{{$row->user->name}} </h6>
											<span class="text-muted">{{$row->message}}</span>
										</div>
										<div class="float-right pt-1">
											<small class="text-muted">{{$row->created_at->diffForHumans()}}</small>
										</div>
									</div>
									<div class="separator-dashed"></div>
									@endforeach
									{{$complains->links()}}
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
@endsection('content')