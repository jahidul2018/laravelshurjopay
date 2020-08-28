<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use smasif\ShurjopayLaravelPackage\ShurjopayService;

use App\User;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shurjopayment.pages.shurjopay');
    }


    public function admit()
    {
        if(Auth::user()->spCode ==0){
            return view('shurjopayment.pages.admit');
        }
        else{
            return view('shurjopayment.pages.shurjopay');
        }

    }


    public function paymentsuccess()
    {

        return view('shurjopayment.pages.paymentsuccess');
    }


    public function paymentstatus(Request $request)
    {
        $id =Auth::user()->id;
        $paymentinfo = User::find($id);

        if($request->status!=null && $request->sp_code !=null){

            $paymentinfo->status = $request->status;
            $paymentinfo->sp_code = $request->sp_code;
        }else{

            $paymentinfo->status = 'FAIL';
            $paymentinfo->sp_code = '001';
        }

        $paymentinfo->update();

        $paymentinfo = User::find($id);
        if($paymentinfo->status !='FAIL'){

            Session::flash('success','Successfully paid your fee');
            return view('shurjopayment.pages.admit');
        }else{
            Session::flash('warning','payment is not successfull');
            return view('shurjopayment.pages.shurjopay');
        }






    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        $shurjopay_service = new ShurjopayService(); //Initiate the object

        $tx_id = $shurjopay_service->generateTxId(); // Get transaction id. You can use custom id like: $shurjopay_service->generateTxId('123456');
        $amount = $request->pamount;
        //$success_route = route('Your route'); // optional.
        //success
        $success_route = route('success.view'); // optional.
        $shurjopay_service->sendPayment(2, $success_route); // You can call simply $shurjopay_service->sendPayment(2) without success route
        //$shurjopay_service->sendPayment($amount); // You can call simply $shurjopay_service->sendPayment(2) without success route
    }
}
