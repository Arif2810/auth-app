@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile User') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Edit User</h5>

                            <form action="/user/{{ Auth::user()->id }}" method="post">
                              @csrf
                              <div class="mb-3">
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}">
                              </div>
                              
                              <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
                              </div>
  
                              <button class="btn btn-warning btn-sm">Update</button>
                              <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
