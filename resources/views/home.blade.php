@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}

                    <div class="d-flex align-items-center justify-content-between">
                        <h4>Welcome, {{$name}}</h4>
                        <a href="http://127.0.0.1:8000/team">
                            <button class="btn btn-warning font-weight-bold">Open Chat
                            </button>
                        </a>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
