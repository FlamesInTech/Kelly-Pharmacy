<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaystackController extends Controller
{
// 

    public function pay()
    {
        return view('pay.index');
    }
    public function paystack($totalprice)
    {
        $formData = [
            'email' => auth()->user()->email,  // User's email (you can change this to your user's email logic)
            // 'email' => request('email'),
            // 'amount' => request('amount') * 100,            
            'amount' => $totalprice * 100, // Paystack requires the amount to be in kobo.
            'currency' => 'NGN', // Change this to your currency code if necessary.

            'callback_url' => route('user.callback_page')
        ];
        $pay = json_decode($this->initiate_payment($formData));
        if ($pay) {
            if ($pay->status) {
                return redirect($pay->data->authorization_url);
            } else {
                return back()->withError($pay->message);
            }
        } else {
            return back()->withError("Something went wrong");
        }
    }


    public function payment_callback()
    {
        $response = json_decode($this->verify_payment(request('reference')));
        if ($response) {
            if ($response->status) {
                $data = $response->data;
                return view('user.callback_page')->with(compact(['data']));
            } else {
                return back()->withError($response->message);
            }
        } else {
            return back()->withError("Something went wrong");
        }
    }

    public function initiate_payment($formData)
    {
        $url = "https://api.paystack.co/transaction/initialize";

        $fields_string = http_build_query($formData);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
            "Cache-Control: no-cache",
        ));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);
        
        return $result;
    }

    public function verify_payment($reference)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return  $response;
    }
}
