<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay($data){
        try {
            $response = $this->gateway->purchase(array(
//                'amount' => $data['amount'],
                'amount' => $data['amount'],
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();


            if($response->isRedirect()){
                $response->redirect();
            }else{
                return $response->getMessage();
            }
        }catch (\Throwable $th){
            return $th->getMessage();
        }
    }

    public function success(Request $request){
        if($request->input('paymentId') && $request->input('PayerID')){
            $transaction = $this->gateway->completePurchase(array(
               'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if($response->isSuccessful()){

                $arr = $response->getData();
                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['payer_email'];
                $payment->amount = $arr['transaction'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];

                $payment->save();

                //
                // 16.66 for 6 month 19.98 for 3 month 29.25 for 1 month
                $today = Carbon::today();
                // for 1 month
                if($request->amount == 29.25){
                    $periodeSubscription = Carbon::parse($today)->addDays(30) ;
                }
                // 3 moonth
                if($request->amount == 19.98){

                    $periodeSubscription = Carbon::parse($today)->addDays(90) ;
                }
                // 6 moonth
                if($request->amount == 16.66){
                    $periodeSubscription = Carbon::parse($today)->addDays(180) ;

                }

                $end_subscription_date = $today + $periodeSubscription;
                return User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role' => $request->role,
                    'payment_status' => true,
                    'end_subscription_date' => $end_subscription_date,
                ]);
                //

                return "Payment is Successfull. Your Transaction Id is : ".$arr['id'];

            }else{
                return $response->getMessage();
            }
        }else{
            return 'Payment is declined';
        }
    }

    public function error(){
        return "user declined payment";
    }
}
