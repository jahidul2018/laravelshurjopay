@extends('shurjopayment.layouts.master')

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

                    {{ __('You are logged in! pay your Payment to download you Admit card') }}

                    @if (Auth::user()->status =='Success' || Auth::user()->sp_code =='000')

                        <a class="nav-link" href="{{ route('admit.index') }}"> download admit card</a>


                    @elseif(Auth::user()->status =='Success' || Auth::user()->sp_code =='001')
                        <a class="nav-link" href="{{ route('payment.index') }}"> Bkash Payment </a>


                        @endif




                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script type="text/javascript">

</script>

@stop
