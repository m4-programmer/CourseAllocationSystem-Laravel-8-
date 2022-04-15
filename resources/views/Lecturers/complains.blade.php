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
								<a href="#">View Course Allocation</a>
							</li>
							
						</ul>
			</div>
			<!-- login for form -->
			<div class="row d-flex justify-content-center">
			
				<div class="col-md-8 card p-4">
					<h3 class="text-center display-4 b mb-5">Make Complain</h3>

					<form method="post" action="{{Route('complain')}} ">
						@csrf
					  <div class="form-group row">
					    <label for="name" class="col-sm-2 col-form-label">Lecturer Name</label>
					    <div class="col-sm-10">
					      <input type="text" readonly class="form-control"  name="name" value="{{Auth::user()->name}}">
					    </div>
					  </div>
					  <div class="form-group row"  >
					    <label for="inputPassword" class="col-sm-2 col-form-label">Complain</label>
					    <div class="col-sm-10">
					      <textarea class="form-control border border-dark" name="complain" rows= "5">
					      	
					      </textarea>
					       @error('complain')
                            <span class="" role="alert" style="margin-top: 5px;color:red;margin-bottom: 5px">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

					      <div class="col text-center">
					      	<button class="btn btn-primary mt-4">Send Complain</button>
					      	
					      </div>
					    </div>

					  </div>
					</form>
						
				</div>
			
			</div>

<!-- login for form -->
		</div>
	</div>
</div>

<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/popup_style.css') }} "> -->
<!--
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Error</strong> 
    </h1>
    <p></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>

 -->


	   @if (session('success'))
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Success</strong> 
    </h1>
    <p>{{ session('success') }}</p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>

@endif
 <script>

      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>

@endsection