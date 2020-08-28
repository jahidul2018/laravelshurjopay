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



                    @if (Auth::user()->status ==1 || Auth::user()->spCode ==0)
                    {{ __('You are logged in! pay your Payment to download you Admit card') }}

                        <a class="nav-link" href="{{ route('admit.index') }}"> download admit card</a>


                    @elseif(Auth::user()->status ==0 || Auth::user()->spCode ==1)
                    your payment is  fail please try one more time
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

    const queryString = window.location.search;

    //console.log(queryString);

    const urlParams = new URLSearchParams(queryString);

    //console.log('......................');


    // if(urlParams.has('status')){

    //     const status = urlParams.get('status')
    //     console.log(status);

    // }
    // else{
    //     status ='FAIL';
    // }


    const status = urlParams.get('status')
        console.log(status);

    const msg = urlParams.get('msg')
    console.log(msg);

    const tx_id = urlParams.get('tx_id')
    console.log(tx_id);

    const bank_tx_id = urlParams.get('bank_tx_id')
    console.log(bank_tx_id);


    const amount = urlParams.get('amount')
    console.log(amount);


    const bank_status = urlParams.get('bank_status')
    console.log(bank_status);



    const sp_code = urlParams.get('sp_code')
    console.log(sp_code);



    const sp_code_des = urlParams.get('sp_code_des')
    console.log(sp_code_des);


    const sp_payment_option = urlParams.get('sp_payment_option')
    console.log(sp_payment_option);


    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
            });

        $.ajax({
          type: "post",
          url: "{{ url('/status/post')}}",
          data: {
            status:status,
            sp_code:sp_code,
          },
          success: function (response) {
            // console.log(response);

            alert('ok');

           // window.location.assign("/get");

                }
          });














</script>

@stop
