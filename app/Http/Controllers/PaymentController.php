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
        $this->middleware(['auth']);
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


    public function admit($id)
    {
        if(Auth::user()->sp_code =='000'){
            $student=User::find(Auth::User()->id);
            return view('admit_card.admit_card')->with('student',$student);
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
            $paymentinfo->msg = $request->msg;
            $paymentinfo->tx_id = $request->tx_id;
            $paymentinfo->bank_tx_id = $request->bank_tx_id;
            $paymentinfo->amount = $request->amount;
            $paymentinfo->bank_status = $request->bank_status;
            $paymentinfo->sp_code = $request->sp_code;
            $paymentinfo->sp_code_des = $request->sp_code_des;
            $paymentinfo->sp_payment_option = $request->sp_payment_option;
            $paymentinfo->update();
            return Response()->json('success');
        }else{

            $paymentinfo->status = 'FAIL';
            $paymentinfo->sp_code = '001';
            $paymentinfo->update();
            return Response()->json('Failed');
            
        }
    }

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
