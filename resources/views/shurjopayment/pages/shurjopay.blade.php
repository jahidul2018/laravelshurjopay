
    @extends('layouts.app')

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
                <p><input type="number" class="form-control" value="200" placeholder="" id="pamount" name="pamount" required disabled></p>
              </div>
              <center>
                  <button type="submit" id="submit" name="submit">Submit</button>
              </center>
              </div>
            </form>
      </div>
  </div>
    @endsection
    