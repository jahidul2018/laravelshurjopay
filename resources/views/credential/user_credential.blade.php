
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Loging Credential') }}</div>

                <div class="card-body">
                    <p>User_id: {{ Auth::User()->user_id }}</p><br>
                    <p>Password: {{ Auth::User()->mobile }}</p>
                    <p><a href="{{ url('/home') }}">Back</a></p>
                </div>
            </div>
        </div>   
    </div>
</div>
@endsection
