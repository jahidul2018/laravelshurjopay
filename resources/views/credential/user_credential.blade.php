
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Loging Credential :') }} <span class="text-danger"> Please Save It Privately</span></div>

                <div class="card-body">
                    <p>User_id: {{ Auth::User()->user_id }}</p>
                    <p>Password: {{ Auth::User()->mobile }}</p>
                    <p>
                        @if (Auth::User()->sp_code!=='000')
                        Please Confirm Payment And Download Admit Card <a href="{{ url('/shurjopay') }}" class="btn btn-sm btn-success">Payment Now</a> Or
                        @else
                        You have Successfully Paid. Download <a href="{{ route('admit.index',[Auth::User()->id]) }}" class="btn btn-sm btn-success">Admit Card</a> Or
                        @endif
                        
                    </p>
                    <p><a href="{{ url('/home') }}" class="btn btn-sm btn-warning">Go to Home</a></p>
                </div>
            </div>
        </div>   
    </div>
</div>
@endsection
