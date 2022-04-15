
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
						<a href="#">Add Courses</a>
					</li>
				</ul>
			</div>


			<!-- Add courses content -->
			<h3 class="text-center">Add Courses</h3>	
			<div class="row d-flex justify-content-center ">
				
			
			<div class="col-md-8 card p-5">
				<form action="{{Route('addCourses')}} " method="post">
					@csrf
				<div class="form-group">
					<label >Course Name(Short)</label>
					<input type="text" class="form-control" name="course_no"  placeholder="Enter Course Name(Short)">
					<small  class="form-text text-muted">E.g Cos 411</small>
					 @error('course_title')
                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                        <strong>{{ $message }}</strong>
                    </span>
               		 @enderror
				</div>
				
				<div class="form-group">
					<label >Course Name(Full)</label>
					<input type="text" class="form-control" name="course_subject"  placeholder="Enter Course Name(Full)">
					<small  class="form-text text-muted">E.g Numerical Methods</small>
					 @error('course_name')
                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                        <strong>{{ $message }}</strong>
                    </span>
               		 @enderror
				</div>
				<div class="form-group">
					<label >Unit Load</label>
					<input type="number" class="form-control" name="unitload"  placeholder="Enter unitload">
					<small  class="form-text text-muted">E.g 2</small>
					 @error('unitload')
                    <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                        <strong>{{ $message }}</strong>
                    </span>
               		 @enderror
				</div>
				<div class="col text-center ">
				<button class="btn btn-success">Submit</button>
			</div>
			</form>
			  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ session('message') }}
                        </div>
                    @endif
			</div>
		</div>
		
	</div>
</div>
@endsection('content')