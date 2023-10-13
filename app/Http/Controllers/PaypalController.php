<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function payment(Request $request){
        //dd($request->price);
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "MXN",
                        "value" => $request->price
                    ]
                ]
            ]
        ]);
        //dd($response);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }else{
            return redirect()->route('paypal_cancel');
        }
    }

    public function success(Request $request){
        $provider = new PaypalClient();
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        //dd($response);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            //return "¡Pago realizado correctamente! Inicia sesión para empezar a usar tu Linkcard.";
            return redirect()->route('paymentSuccess')->with('success', '¡Pago realizado correctamente! Ya puedes usar tu Linkcard');
        }else{
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel(Request $request){
        return "¡Pago cancelado!";
    }

}
