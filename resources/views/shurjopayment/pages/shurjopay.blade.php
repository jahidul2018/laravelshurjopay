
@extends('shurjopayment.layouts.master')
	@section('title', 'payment')
    @section('content')

    <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="img">
              <img src="{{ asset('payment/images/shurjopay-logo.png') }}" alt="" class="center">
              <hr>
            </div>
              <form id="regForm" method="post" action="{{ route('payment.post') }}">
                {{-- action="sp.php" --}}
                @csrf
                <div class="tab">
                  <center><h4>Payment amount</h4></center>
                  <p><input type="number" placeholder="Enter Payment Amount ( i.e 2 tk)" id="pamount" name="pamount" required ></p>
                </div>
                <center>
                    <button type="submit" id="submit" name="submit">Submit</button>
                </center>
                </div>
              </form>
        </div>
    </div>


<div class="clearix"></div>
    @endsection

    @section('script')

    @endsection

