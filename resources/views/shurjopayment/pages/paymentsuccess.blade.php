@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div id="success">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    </div>
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    @if (Auth::user()->status ==1 || Auth::user()->spCode =='000')
                    {{ __('You Have SuccessFully Paid') }}

                        <a class="nav-link" href="{{ route('admit.index') }}"> Download Admit Card</a>


                    @elseif(Auth::user()->status ==0 || Auth::user()->spCode =='001')
                    your payment is  fail please try one more time
                        <a class="nav-link" href="{{ route('payment.index') }}"> Bkash Payment </a>


                        @endif --}}




                </div>
            </div>
        </div>
    </div>
</div>
{{-- @section('script') --}}
<script src="{{ asset('js/jquery-3.2.1.min.js') }}" ></script>
<script type="text/javascript">
        const queryString = window.location.search;

        //console.log(queryString);
    
        const urlParams = new URLSearchParams(queryString);
    
            const url_data={
                'status':urlParams.get('status'),
                'msg':urlParams.get('msg'),
                'tx_id':urlParams.get('tx_id'),
                'bank_tx_id':urlParams.get('bank_tx_id'),
                'amount':urlParams.get('amount'),
                'bank_status':urlParams.get('bank_status'),
                'sp_code':urlParams.get('sp_code'),
                'sp_code_des':urlParams.get('sp_code_des'),
                'sp_payment_option':urlParams.get('sp_payment_option'),
            }
            //console.log(url_data.sp_code);
            if(url_data.sp_code=='000'){
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('#token').val()
                    },
                });
    
            $.ajax({
              type: "post",
              url: "{{ url('/status/post')}}",
              data: url_data,
              success: function (response) {
                 console.log(response);
                if(){
                    window.location='/admit';
                }else{
                    window.location='/shurjopay'
                }
               
                //window.location.={{URL::to('restaurants/20')}}
    
               // window.location.assign("/get");
    
                    }
              });
                
                    
            }else{

            }
    
    </script>
@endsection



