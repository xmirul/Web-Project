@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4"
      <div class="col-md-12">
            <div class="navbar">
                <a class="active" href="{{ url('/home')}}">Home</a>
                    <a href="{{ url('/developers')}}">Developer</a>
                    <a href="{{ url('/managers')}}">Project Manager</a>
                    @can('isAdmin')
                    <a href="{{ url('/projects')}}">Project</a>
                    @endcan
                    <a href="{{ url('/LeadDeveloper')}}">Lead Developer</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center>
                     <h2>{{ __('Welcome !!') }}</h2>
                     <h4>{{ __('Efficiently Manage Your IT Projects') }}</h4>
                    </center>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="col-md-9">
          @yield('content')
        </div>

      </div>

</div>

@endsection
