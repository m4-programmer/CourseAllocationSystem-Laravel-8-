@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->username }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ session('message') }}
                        </div>
                    @endif
             @if (auth()->user()->role_as = '2') 
            
           {{ redirect('admin/dashboard')}};
        @elseif (auth()->user()->role_as = '1') 
         
            return redirect('lecturers/dashboard');
        }
        @else
             return redirect('Students/dashboard');
             // u can also chain with('status', 'message')
        @endif
                    {{ __('You are logged in '). Auth::user()->role_as }}
                    <a href="{{url('admin/dashboard')}} ">Go to Admin dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
