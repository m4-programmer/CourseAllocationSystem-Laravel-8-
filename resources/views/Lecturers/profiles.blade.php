
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
						<a href="#">Profile Page</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					
				</ul>
			</div>

			<!-- Add courses content -->
			<div class="col-md-12">
				<div class="container-fluid p-0">
					<div class="row">
				

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">

									<div class="card">
										<div class="card-header">

											<h5 class="card-title mb-0">Profile Details</h5>
										</div>
										<div class="card-body">
											<form action="{{url('lecturers/profiles/'.auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('put')
												@foreach($details as $row)
												<div class="row">
													<div class="col-md-8">
													
  								
 
                                						<div class="form-group">
															<label for="inputFirstName">Full name</label>
														<input type="text" class="form-control" name="name" value="{{$row->name}}" placeholder="Full name">
															 @error('name')
                                <span class="" role="alert" style="margin-top: 5px;color:blue;margin-bottom: 5px">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
														</div>
														<div class="form-group">
															<label for="inputUsername">Username</label>
															<input type="text" class="form-control" value="{{$row->username}} " name="username" placeholder="Username" disabled>
															@error('username')
                                <span class="" role="alert" style="margin-top: 5px;color:blue;margin-bottom: 5px">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
														</div>
														
														<div class="form-group">
															<label >Email</label>
													<input type="email" class="form-control" name="email" value="{{$row->email}}" placeholder="Email" disabled>
													@error('email')
					                                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
					                                        <strong>{{ $message }}</strong>
					                                    </span>
                                					@enderror   
                                					 
														</div>
														
													</div>
													<div class="col-md-4">
														<div class="text-center">
															<img alt="Charles Hall" id="changes" src="{{ asset($row->profile_pics )}}" class="rounded-circle img-responsive mt-2" wnameth="128" width="128" height="128" />
															<div class="mt-2">
																<input type="file" name="profile_pics" id="profile_pics" hidden>
																<p id="text"></p>
																<span class="btn btn-primary" id="clickme"><i class="fas fa-upload"></i> Upload</span>
																	  
								<script type="text/javascript">
									$(document).ready(function () {
										//changes the upload functionality from the default file button to the customize button
											$('#clickme').click(function(){
												$('#profile_pics').click()
												
											});
											// updates the profile pics with the uploaded pics
											 $('#profile_pics').change(function () {
											 	
											 		var file = $(this).get(0).files[0];
												if (file) {
													var reader = new FileReader();
													reader.onload = function(){
														
														$('#changes').attr('src', reader.result);		
														}																			
													reader.readAsDataURL(file);
												}
											 	})
											
												
											})
										
											

									
									</script>

															</div>
															<small>For best results, use an image at least 128px by 128px in .jpg format</small>
															<p>
															@error('profile_pics')
                                <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                                    <strong>{{ $message }}</strong>
                                </span>
                  					@enderror 
                  					</p>
														</div>
													</div>
												</div>
													<div class="form-row">
														
															<div class="col-md-6">
																<div class="form-group ">
																<label >Role</label>
																<input type="text" class="form-control" name="email" value="{{$role}}" placeholder="Email"  disabled>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group ">
																<label >Position</label>
																<input type="text" class="form-control" name="position" value="{{$row->position}}" placeholder="Position" disabled>
																	</div>
															</div>
														
														
													</div>
												</div>
												<div class="row ">
													<div class="col text-center mb-3">
														<button type="submit" class="btn btn-primary">Save changes</button>
													</div>
													@if(route('profiles_lec') and auth()->user()->role_as == '2')
														true
													@endif
												</div>
												
											</form>
												@endforeach
										</div>
									</div>

								</div>

							
							</div>
						</div>
					</div>

				</div>
			</main>
			</div>
	</div>
</div>

	 
@endsection('content')