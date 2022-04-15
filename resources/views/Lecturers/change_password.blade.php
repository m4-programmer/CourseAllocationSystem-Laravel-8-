
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
					<li class="nav-item">
						<a href="#">Change Password</a>
					</li>
				</ul>
			</div>

					<!-- Add courses content -->
			<div class="col-md-12">
				<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>

											<form action="{{url('lecturers/change_password/'.auth()->user()->id)}} " method="post">
                                            @csrf
                                                @method('put')
                        
                                                <div class="form-group">
                                                    <label for="inputPasswordCurrent">Current password</label>
                                                    <input type="password" class="form-control" name="inputPasswordCurrent">
                                                    @error('inputPasswordCurrent')
                                                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
					                                        <strong>{{ $message }}</strong>
					                                    </span>
					                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPasswordNew">New password</label>
                                                    <input type="password" class="form-control" name="password">
                                                     @error('password')
                                                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
					                                        <strong>{{ $message }}</strong>
					                                    </span>
					                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPasswordNew2">Verify password</label>
                                                    <input type="password" class="form-control" name="password_confirmation">
                                                  
                                                </div>
                                                
                                            
                                                <div class="row ">
                                                    <div class="col text-center mb-3">
                                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                                        
                                                    </div>
                                            </form>
                                            asds
										</div>
									</div>
								</div>
								

				


	  
@endsection('content')