@extends('shurjopayment.layouts.master')
@section('title')
Student List
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Welcome to DashBoard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tile">
                                <div class="tile-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered" id="sampleTable">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Student Id</th>
                                                <th>Name</th>
                                                <th>fathername</th>
                                                <th>mothername</th>
                                                <th>mobile</th>
                                                <th>Class</th>
                                                <th>Language</th>
                                                <th>Session</th>
                                                <th>Bank Status</th>
                                                <th>Payment Option</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
      @include('shurjopayment.partials.js.datatable');
      <script>
       
           var table= $('#sampleTable').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    'excel',
                ],
                processing:true,
                serverSide:true,
                ajax:"{{url('/admin/student/syncTable')}}",
                columns:[
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'user_id', name: 'user_id' },
                    { data: 'name', name: 'name' },
                    { data: 'fathername', name: 'fathername' },
                    { data: 'mothername', name: 'mothername' },
                    { data: 'mobile', name: 'mobile' },
                    { data: 'classname', name: 'classname' },
                    { data: 'examlanguage', name: 'examlanguage' },
                    { data: 'session', name: 'session' },
                    { data: 'bank_status', name: 'bank_status' },
                    { data: 'sp_payment_option', name: 'sp_payment_option' },
                    { data: 'amount', name: 'amount' },
                    { data: 'action', name: 'action' }
                ]
            });
            </script>
@endsection
