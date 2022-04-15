@extends("layouts.master")

@section("content")
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">{{Auth::user()->name}} Dashboard</h2>
								<h5 class="text-white op-7 mb-2">Computer Science Student Dashboard</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					
					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title">Computer Science Course Timetable</h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div>
									<p class="card-category">
									timetable containing the various courses and the lecturers handling them</p>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<div class="">
												<table class="table table-bordered">
													<tbody>
														<tr>
															<th>
																S/N
															</th>
															<th>
																COURSE CODE
															</th>
															<th >COURSE NAME</th>
															<th >
																TAUGHT BY
															</th>
															
														</tr>
														<tr>
															<td>
																1
															</td>
															<td>
																COS 411
															</td>
															<td>Numerica Methods</td>
															<td >
																<ul>
																	<li>Dr Obayi</li>
																	<li>Dr Asogwa</li>
																</ul>
															</td>
															
														</tr>
														<tr>
															<th>
																S/N
															</th>
															<th>
																COURSE CODE
															</th>
															<th >COURSE NAME</th>
															<th >
																TAUGHT BY
															</th>
															
														</tr>
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
			</div>
			
		</div>

@endsection