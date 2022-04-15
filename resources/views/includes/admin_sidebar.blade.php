<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset(auth()->user()->profile_pics )}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{ Auth::user()->name}}
									@if(Auth::user()-> role_as == '2')
									<span class="user-level">Administrator</span>
									@endif
									@if(Auth::user()-> role_as == '1')
									<span class="user-level">Lecturer</span>
									@endif
									@if(Auth::user()-> role_as == '0')
									<span class="user-level">Student</span>
									@endif
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										@if(Auth::user()->role_as == '2')
										<a  href="{{ route('profiles') }}">
										@elseif(Auth::user()->role_as == '1')
										<a  href="{{ route('profiles_lec') }}">
										@else
										<a  href="{{ route('student_profile') }}">
										@endif
											<span class="link-collapse">My Profile</span>
										</a>
											@if(Auth::user()->role_as == '2')
										<a  href="{{ route('password') }}">
										@elseif(Auth::user()->role_as == '1')
										<a  href="{{ route('lec_password') }}">
										@else
										<a  href="{{ route('student_pass') }}">
										@endif
											<span class="link-collapse">My Password</span>
										</a>
										
									</li>
									
									@if(Auth::user()->role_as == '2')
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
									@endif
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							@if(Auth::user()->role_as == '2')
							<a  href="{{ route('admin')}}" >
							@endif
							@if(Auth::user()->role_as == '1')
							<a  href="{{ url('lecturers/dashboard')}}" >
							@endif
							@if(Auth::user()->role_as == '0')
							<a  href="{{ route('students')}}" >
							@endif
								<i class="fas fa-home"></i>
								
								<p>Dashboard</p>
								
								
							</a>
							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						@if(Auth::user()->role_as == '2')
						<!-- Admin sidebar 1 -->
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Manage Users</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{url('admin/students')}}">
											<span class="sub-item">Students</span>
										</a>
									</li>
									<li>
										<a href="{{url('admin/lecturers')}}">
											<span class="sub-item">Lecturers</span>
										</a>
									</li>
									<li>
										<a href="{{route('special')}}">
											<span class="sub-item">Specializations</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						
						<!-- sidebar 2 -->
						<li class="nav-item">
							<a data-toggle="collapse" href="#courses">
								<i class="fas fa-layer-group"></i>
								<p>Manage Courses</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="courses">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{url('admin/view_courses')}}">
											<span class="sub-item">View Courses</span>
										</a>
									</li>
									<li>
										<a href="{{url('admin/add_courses')}}">
											<span class="sub-item">Add Courses</span>
										</a>
									</li>
									
									
								</ul>
							</div>
						</li>
						<!-- sidebar 3 -->
						<li class="nav-item ">
							<a  href="{{ url('admin/complains')}}" >
								<i class="fas fa-layer-group"></i>
								
								<p>View Complains</p>
								
								
							</a>
							
						</li>
						<!-- sidebar 4 -->
						<li class="nav-item">
							<a data-toggle="collapse" href="#allocate">
								<i class="fas fa-layer-group"></i>
								<p>Manage  Allocation</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="allocate">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{url('admin/allocate')}}">
											<span class="sub-item">Allocate Courses</span>
										</a>
									</li>
									<li>
										<a href="{{url('admin/view_allocated')}}">
											<span class="sub-item">View Allocated Courses</span>
										</a>
									</li>
																		
								</ul>
							</div>
						</li>
						@endif
						@if(Auth::user()->role_as == '1')
						<!-- Lecturers Sidebar -->
						<li class="nav-item">
							<a href="{{url('lecturers/allocation')}}">
							<i class="fas fa-book-reader"></i>
							View Course Allocation
							</a>
						</li>
						
						<li class="nav-item ">
							<a  href="{{ url('lecturers/complains')}}" >
								<i class="fas fa-layer-group"></i>
								
								<p>Make Complain</p>
								
								
							</a>
							
						</li>
						@endif
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->