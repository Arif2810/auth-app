@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('notification')

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Data User</h5>
                            <h6>Nama  : {{ Auth::user()->name }}</h6>
                            <h6>Email : {{ Auth::user()->email }}</h6>
                            <a href="user/edit/{{ Auth::user()->id }}" class="btn btn-warning btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
